<?php
namespace Codilaar\HelloWorld\Model;

/**
* Ecommerce Model
*
* @method \Codilaar\HelloWorld\Model\Resource\Page _getResource()
* @method \Codilaar\HelloWorld\Model\Resource\Page getResource()
*/
class HelloWorld extends \Magento\Framework\Model\AbstractModel{
/**
* Initialize resource model
*
* @return void
*/
protected function _construct(){
$this->_init(‘Codilaar\HelloWorld\Model\ResourceModel\HelloWorld’);
}

}
