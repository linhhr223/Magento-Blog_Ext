<?php
namespace Smartosc\Sumup\Model;

use Magento\Framework\App\ObjectManager;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magento\Store\Model\StoreManagerInterface;
use Smartosc\Sumup\Model\Blog\FileInfo;

class Post extends \Magento\Framework\Model\AbstractModel
{
    protected $_storeManager;

    protected $url;

    public function __construct(
        Config $config,
        Url $url,
        StoreManagerInterface $storeManager,
        Context $context,
        Registry $registry
    ) {
        $this->config                   = $config;
        $this->url                      = $url;
        $this->_storeManager             = $storeManager;

        parent::__construct($context, $registry);
    }

    protected function _construct()
    {
        $this->_init('Smartosc\Sumup\Model\ResourceModel\Post');
    }

}
