<?php

namespace Nikolaychuk\AssetsWork\Model\ResourceModel\Asset;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'data_assets_id';
    protected $_eventPrefix = 'nikolaychuk_assetswork_asset_collection';
    protected $_eventObject = 'asset_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Nikolaychuk\AssetsWork\Model\Asset', 'Nikolaychuk\AssetsWork\Model\ResourceModel\Asset');
    }

    /**
     * Get SQL for get record count.
     * Extra GROUP BY strip added.
     *
     * @return \Magento\Framework\DB\Select
     */
    public function getSelectCountSql()
    {
        $countSelect = parent::getSelectCountSql();
        $countSelect->reset(\Zend_Db_Select::GROUP);
        return $countSelect;
    }
    /**
     * @param string $valueField
     * @param string $labelField
     * @param array $additional
     * @return array
     */
    protected function _toOptionArray($valueField = 'data_assets_id', 
                                      $labelField = 'name', 
                                      $additional = [])
    {
        return parent::_toOptionArray($valueField, $labelField, $additional);
    }
}