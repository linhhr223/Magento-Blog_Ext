<?php
namespace Smartosc\Sumup\Model\ResourceModel\Post;
use Magento\Framework\App\ObjectManager;
use Smartosc\Sumup\Model\Category;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'blog_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Smartosc\Sumup\Model\Post', 'Smartosc\Sumup\Model\ResourceModel\Post');
    }
}
