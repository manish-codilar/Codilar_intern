<?php
/**
 * Created by PhpStorm.
 * User: ranjitha
 * Date: 21/3/18
 * Time: 1:23 PM
 */

namespace Codilaar\HelloWorld\Controller\Index;


use function explode;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Exception\LocalizedException;
use \Codilaar\HelloWorld\Helper\Product;

class ProductPost extends Action
{
    /**
     * @var Session
     */
    private $session;
    /**
     * @var Product
     */
    private $product;
    /**
     * @var Context
     */
    private $context;

    /**
     * ProductPost constructor.
     * @param Session $session
     * @param Context $context
     * @param Product $product
     */
    public function __construct(
        Session $session,
        Context $context,
        Product $product
    )
    {
        parent::__construct($context);
        $this->session = $session;

        $this->product = $product;
        $this->context = $context;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        try {
//            if (!$this->session->isLoggedIn()) {
//                throw new LocalizedException(__("Illegal access"));
//            } else if ($this->session->getCustomer()->getData('is_verified') != "yes") {
//                throw new LocalizedException(__("Illegal access"));
//            }
            /* @var \Magento\Framework\App\Request\Http $request */
            $request = $this->getRequest();
            $data = $request->getPostValue();
            echo "Done";
            $this->product->createProduct($data['pname'],$data['price'],$data['description'],explode(",",$data['category']),$data['image']);
echo"Exit";
        } catch(LocalizedException $localizedException) {

        } catch (\Exception $exception) {

        }
    }
}
