<?php


namespace Codilaar\HelloWOrld\Model\ResourceModel\HelloWorld;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
/**
* Resource initialization
*
* @return void
*/
protected function _construct(){
$this->_init(‘Codilaar\HelloWorld\Model\HelloWorld’, ‘Codilaar\HelloWorld\Model\ResourceModel\HelloWorld’);
}
}


