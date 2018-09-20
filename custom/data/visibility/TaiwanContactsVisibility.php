<?php
namespace Sugarcrm\Sugarcrm\custom\data\visibility;

use Sugarcrm\Sugarcrm\Elasticsearch\Provider\Visibility\StrategyInterface;
use Sugarcrm\Sugarcrm\Elasticsearch\Provider\Visibility\Visibility;
use Sugarcrm\Sugarcrm\Elasticsearch\Analysis\AnalysisBuilder;
use Sugarcrm\Sugarcrm\Elasticsearch\Mapping\Mapping;
use Sugarcrm\Sugarcrm\Elasticsearch\Adapter\Document;

class TaiwanContactsVisibility extends \SugarVisibility implements StrategyInterface
{
    private $countryField = 'primary_address_country';
    private $contactCountry = 'TW';
    public static $restrictedCountry = array('CN', 'HK', 'MO', 'MN');

    public function addVisibilityWhereQuery(\SugarQuery $sugarQuery, $options = array())
    {
        global $current_user;
        if ($current_user->isAdminForModule($this->bean->module_dir)
            || (!in_array($current_user->address_country, SELF::$restrictedCountry))
         ) {
            return $sugarQuery;
        }
        $sugarQuery->where()->queryOr()
        ->notEquals($this->countryField, $this->contactCountry)
        ->isNull($this->countryField);
        return $sugarQuery;
    }
    public function addVisibilityWhere(&$query)
    {
        global $current_user,$db;
        if ($current_user->isAdminForModule($this->bean->module_dir)
        ) {
            return $query;
        }
        $tableAlias = $this->getOption('table_alias');
        if (empty($tableAlias)) {
            $tableAlias = $this->bean->getTableName();
        }
        if (in_array($current_user->address_country, SELF::$restrictedCountry)) {
            $filter = sprintf(
                '(%3$s.%1$s != %2$s)',
                $this->countryField,
                $db->quoted($this->contactCountry),
                $tableAlias
            );
            $query .= $query ? sprintf(' AND (%s)', $filter) : $filter;
            return $query;
        }
    }
    public function elasticBuildAnalysis(AnalysisBuilder $analysisBuilder, Visibility $provider)
    {
        // no special analyzers needed
    }
    /**
     * {@inheritdoc}
     */
    public function elasticBuildMapping(Mapping $mapping, Visibility $provider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function elasticProcessDocumentPreIndex(Document $document, \SugarBean $bean, Visibility $provider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function elasticGetBeanIndexFields($module, Visibility $provider)
    {
        return array();
    }
    /**
     * {@inheritdoc}
     */
    public function elasticAddFilters(\User $user, \Elastica\Query\BoolQuery $filter, Visibility $provider)
    {
        global $current_user;
        if ((!empty($user)) && (
                $user->isAdminForModule($this->bean->module_dir)
            )) {
            return;
        }
        if (in_array($current_user->address_country, SELF::$restrictedCountry)) {
             $filter->addMustNot($provider->createFilter('TaiwanContacts', array('module'=>$this->bean->module_dir)));
        }
    }
}
