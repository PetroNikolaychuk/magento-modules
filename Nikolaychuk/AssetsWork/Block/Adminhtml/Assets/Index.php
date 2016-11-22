<?php

namespace Nikolaychuk\AssetsWork\Block\Adminhtml\Assets;

class Index extends \Magento\Backend\Block\Widget\Grid\Container
{

    protected function _construct()
    {
        $this->_blockGroup = 'Nikolaychuk_AssetsWork';
        $this->_controller = 'adminhtml_assets_index';
        $this->_headerText = __('Manage assets index');
        parent::_construct();
        $this->buttonList->update('add', 'label', __('Add Widget'));
    }
}
