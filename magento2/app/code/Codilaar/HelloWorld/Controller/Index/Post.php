<?php

namespace Codilaar\HelloWorld\Controller\Index;

class Post extends \Magento\Framework\App\Action\Action{
/**
* Post user question
*
* @return void
* @throws \Exception
*/
public function execute(){
$post = $this->getRequest()->getPostValue();


try {
$postObject = new \Magento\Framework\DataObject();
$postObject->setData($post);

$error = false;

if (!\Zend_Validate::is(trim($post['product_name']), 'NotEmpty')) {
$error = true;
}

if (!\Zend_Validate::is(trim($post['product_price']), 'NotEmpty')) {
$error = true;
}
if (\Zend_Validate::is(trim($post['description']), 'NotEmpty')) {
$error = true;
}
if ($error) {
throw new \Exception();
}

/*$storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
$transport = $this->_transportBuilder
->setTemplateIdentifier($this->scopeConfig->getValue(self::XML_PATH_EMAIL_TEMPLATE, $storeScope))
->setTemplateOptions(
[
‘area’ => \Magento\Backend\App\Area\FrontNameResolver::AREA_CODE,
‘store’ => \Magento\Store\Model\Store::DEFAULT_STORE_ID,
]
)
->setTemplateVars([‘data’ => $postObject])
->setFrom($this->scopeConfig->getValue(self::XML_PATH_EMAIL_SENDER, $storeScope))
->addTo($this->scopeConfig->getValue(self::XML_PATH_EMAIL_RECIPIENT, $storeScope))
->setReplyTo($post[’email’])
->getTransport();

$transport->sendMessage();*/
$pname = $post['pname'];
$pprice = $post['price'];
$pdesc = $post['description'];
$pcat = $post['category'];
$pimg = $post['pic'];
$model = $this->_objectManager->create('Codilaar\HelloWorld\Model\HelloWorld');
$model->setproduct_name($pname);
$model->setproduct_price($pprice);
$model->setdescription($pdesc);
$model->setcategory($pcat);
$model->setimage($pimg);
$model->save();

$this->messageManager->addSuccess(
__('Thanks for contacting us with your comments and questions.')
);
$this->_redirect('HelloWorld/index');
return;
} catch (\Exception $e) {
$this->messageManager->addError(
__('We can\’t process your request right now. Sorry, that\’s all we know.')
);
$this->_redirect('HelloWorld/index');
return;
}
}
}
