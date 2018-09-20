<?php
use Sugarcrm\Sugarcrm\Util\Files\FileLoader;

class CreateDocumentsFromFiles extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'createDocumentsFromFiles' => array(
                'reqType'         => 'POST',
                'path'            => array('createDocumentsFromFiles', '?', '?'),
                'pathVars'        => array('', 'module', 'id'),
                'method'          => 'createDocuments',
                'shortHelp'       => 'Creates documents from file uploads',
                'longHelp'        => '',
            ),
        );
    }

    public function createDocuments($api, $args)
    {
        global $current_user, $sugar_config;

        $uploadDir = empty($sugar_config['upload_dir']) ? 'upload' : $sugar_config['upload_dir'];
        $badExtensions = empty($sugar_config['upload_badext']) ? array() : $sugar_config['upload_badext'];
        $maxSize = empty($sugar_config['upload_maxsize']) ? 100000000 : $sugar_config['upload_maxsize'];

        SugarAutoLoader::ensureDir($uploadDir);

        if (empty($args['module']) || empty($args['id']) || empty($_FILES['file'])) {
            throw new Exception(translate('LBL_M_FILE_UPLOAD_INTERNAL_ERROR'));
        }

        $file = $_FILES['file'];

        try {
            $formattFile = FileLoader::validateFilePath($file['tmp_name'], true);
        }catch(Exception $ex){
            throw new SugarApiExceptionInvalidParameter($ex->getMessage());
        }

        $ext = $this->getExtension($file);

        if($file['size'] > $maxSize) {
            throw new Exception(translate('LBL_M_FILE_UPLOAD_MAX_SIZE_EXCEEDED'));
        }

        if(in_array($ext, $badExtensions)) {
            throw new Exception(translate('LBL_M_FILE_UPLOAD_FORBIDDEN_EXTENSION'));
        }

        $document = BeanFactory::getBean('Notes');
        $document->name = str_replace('.' . $ext, '', $file["name"]);
        $document->assigned_user_id = $current_user->id;
        $document->parent_id = $args['id'];
        $document->parent_type = $args['module'];
        $document->file_mime_type = get_file_mime_type($file['tmp_name'], 'application/octet-stream');
        $document->file_ext = $ext;
        $document->filename = $file["name"];
        $document->file_size = filesize($file['tmp_name']);

        $document->save();

        $fileUpload = new UploadStream();
        $fileUpload::move_uploaded_file($file['tmp_name'], "upload://" . $document->id);
    }

    protected function getExtension($file) {
        return end(explode(".", $file["name"]));
    }
}