<?php

namespace Codilar\CustomerAttribute\Block;

use Magento\Framework\View\Element\Template;

class CustomerAttribute extends Template
{
	protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function  getText()
	{
	    return "Become a seller";
    }


}