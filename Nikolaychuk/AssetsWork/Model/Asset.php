<?php 

namespace Nikolaychuk\AssetsWork\Model;

class Asset extends \Magento\Framework\Model\AbstractModel 
    implements \Magento\Framework\DataObject\IdentityInterface,
               \Nikolaychuk\AssetsWork\Model\Api\Data\AssetInterface
{
    const CACHE_TAG = 'nikolaychuk_assetswork_asset';

    protected $_cacheTag = 'nikolaychuk_assetswork_asset';

    protected $_eventPrefix = 'nikolaychuk_assetswork_asset';

    protected function _construct()
    {
        $this->_init('Nikolaychuk\AssetsWork\Model\ResourceModel\Asset');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}