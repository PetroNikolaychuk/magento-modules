<?php

namespace Nikolaychuk\AssetsWork\Controller\Adminhtml\News;

use Nikolaychuk\AssetsWork\Controller\Adminhtml\News;

class Index extends News
{
    /**
     * @return void
     */
    public function execute()
    {
        if ($this->getRequest()->getQuery('ajax')) {
            $this->_forward('grid');
            return;
        }

        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Nikolaychuk_AssetsWork::main_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Simple News'));

        return $resultPage;
    }
}