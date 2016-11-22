<?php

namespace Nikolaychuk\AssetsWork\Controller\Adminhtml\News;

use Nikolaychuk\AssetsWork\Controller\Adminhtml\News;

class Grid extends News
{
    /**
     * @return void
     */
    public function execute()
    {
        return $this->_resultPageFactory->create();
    }
}