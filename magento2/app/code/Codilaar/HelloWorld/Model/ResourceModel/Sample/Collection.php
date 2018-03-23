<?php
/**
 * Created by PhpStorm.
 * User: ranjitha
 * Date: 21/3/18
 * Time: 9:53 AM
 */


namespace Codilaar\HelloWorld\Model\ResourceModel\Sample;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Codilaar\HelloWorld\Model\Sample as Model;
use Codilaar\HelloWorld\Model\ResourceModel\Sample as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}

