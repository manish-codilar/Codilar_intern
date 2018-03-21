<?php
/**
 * Created by PhpStorm.
 * User: ranjitha
 * Date: 16/3/18
 * Time: 3:47 PM
 */

namespace Codilar\CustomerAttribute\Block;

use Magento\Framework\View\Element\Template;

class CustomerAttribute extends Template
{
    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    public function getName()
    {
        return "Create Accounts";
    }

}
