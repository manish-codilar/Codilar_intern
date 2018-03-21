<?php
namespace Codilaar\HelloWorld\Model\ResourceModel;


class HelloWorld extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
/**
* Initialize resource model
*
* @return void
*/
protected function _construct(){
$this->_init(‘seller_product_page’, ‘product_id’);
}
}
