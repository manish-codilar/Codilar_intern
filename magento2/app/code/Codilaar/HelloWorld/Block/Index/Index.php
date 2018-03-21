<?php

namespace Codilaar\HelloWorld\Block\Index;
use Codilaar\HelloWorld\Block\BaseBlock;
class Index extends BaseBlock{
/**
* Returns action url for contact form. Form submit URL
*
* @return string
*/
public function getFormAction(){
return $this->getUrl('hello/index/index', ['_secure' => true]);
}
}


