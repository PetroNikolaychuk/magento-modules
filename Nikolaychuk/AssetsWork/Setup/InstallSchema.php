<?php

namespace Nikolaychuk\AssetsWork\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    
    
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {



        $installer = $setup;

        $installer->startSetup();

        /**
         * Create table 'data_assets'
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('data_assets')
        )->addColumn(
            'data_assets_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'data_assets Id'
        )->addColumn(
            'data_assets_type',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'data_assets type of file'
        )->addColumn(
            'data_assets_pages',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'data_assets pages that use the assets'
        )->addColumn(
            'data_assets_src',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'data_assets source of file'
        )->setComment(
            'Custom assets to pages'
        );
        $installer->getConnection()->createTable($table);

        $installer->endSetup();

    }
}
