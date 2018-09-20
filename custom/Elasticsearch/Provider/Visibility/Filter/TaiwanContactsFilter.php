<?php
namespace Sugarcrm\Sugarcrm\Elasticsearch\Provider\Visibility\Filter;

use Sugarcrm\Sugarcrm\Elasticsearch\Mapping\Mapping;
use Sugarcrm\Sugarcrm\custom\data\visibility\TaiwanContactsVisibility;

class TaiwanContactsFilter implements FilterInterface
{
    use FilterTrait;
    public function buildFilter(array $options = array())
    {
        global $current_user;
        if (!isset($options['module'])) {
            throw new \RuntimeException(translate('LBL_TW_CONTACTS', 'Contacts'));
        }
        if (($options['module'] === 'Contacts')
            && in_array($current_user->address_country, TaiwanContactsVisibility::$restrictedCountry)) {
             return (new \Elastica\Query\Term())->setTerm(
                 $this->getEsField('Contacts', 'primary_address_country'),
                 'TW'
             );
        }
    }
    private function getEsField($module, $field)
    {
        return sprintf('%s%s%s.gs_not_analyzed', $module, Mapping::PREFIX_SEP, $field);
    }
}
