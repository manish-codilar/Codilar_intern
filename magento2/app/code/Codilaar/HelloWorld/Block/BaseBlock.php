<?php

namespace Codilaar\HelloWorld\Block;
use Magento\Framework\UrlFactory;
class BaseBlock extends \Magento\Framework\View\Element\Template{
/**
* @var Codilaar\HelloWorld\Helper\Data
*/
protected $_devToolHelper;
/**
* @var \Magento\Framework\Url
*/
protected $_urlApp;
/**
* @var Codilaar\HelloWorld\Model\Config
*/
protected $_config;

/**
* @param Codilaar\HelloWorld\Block\Context $context
* @param \Magento\Framework\UrlFactory $urlFactory
*/
public function __construct( Codilaar\HelloWorld\Block\Context $context){
$this->_devToolHelper = $context->getEcommerceHelper();
$this->_config = $context->getConfig();
$this->_urlApp=$context->getUrlFactory()->create();
parent::__construct($context);
}
/**
* Function for getting event details
* @return array
*/
public function getEventDetails(){
return $this->_devToolHelper->getEventDetails();
}
/**
* Function for getting current url
* @return string
*/
public function getCurrentUrl(){
return $this->_urlApp->getCurrentUrl();
}
/**
* Function for getting controller url for given router path
* @param string $routePath
* @return string
*/
public function getControllerUrl($routePath){
return $this->_urlApp->getUrl($routePath);
}
/**
* Function for getting current url
* @param string $path
* @return string
*/
public function getConfigValue($path){
return $this->_config->getCurrentStoreConfigValue($path);
}

/**
* Function canShowEcommerce
* @return bool
*/
public function canShowEcommerce(){
$isEnabled=$this->getConfigValue('hello/module/is_enabled');
if($isEnabled){
$allowedIps=$this->getConfigValue('hello/module/allowed_ip');
if(is_null($allowedIps)){
return true;
}else {
$remoteIp=$_SERVER['REMOTE_ADDR'];
if (strpos($allowedIps,$remoteIp) !== false) {
return true;
}
}
}
return false;
}
}
