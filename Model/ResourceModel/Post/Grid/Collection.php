<?php
namespace AHTUI\BurningLog\Model\ResourceModel\Post\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'buring_id';
    protected $_eventPrefix = 'ahtui_burninglog_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AHTUI\BurningLog\Model\Post', 'AHTUI\BurningLog\Model\ResourceModel\Post');
    }
}
