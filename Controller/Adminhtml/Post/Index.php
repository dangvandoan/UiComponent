<?php
namespace AHTUI\BurningLog\Controller\Adminhtml\Post;

class Index extends \Magento\Backend\App\Action
{
    // const ADMIN_RESOURCE = 'AHTUI_BurningLog::index';
    const ADMIN_RESOURCE = 'AHT_HelloWorld::helloworld';

    const PAGE_TITLE = 'Page Title';

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     */
    public function __construct(
       \Magento\Backend\App\Action\Context $context,
       \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    /**
     * Index action
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()

    {
        // echo "hello"; die;
         /** @var \Magento\Framework\View\Result\Page $resultPage */
         $resultPage = $this->_pageFactory->create();
         $resultPage->setActiveMenu(static::ADMIN_RESOURCE);
         $resultPage->addBreadcrumb(__(static::PAGE_TITLE), __(static::PAGE_TITLE));
         $resultPage->getConfig()->getTitle()->prepend(__(static::PAGE_TITLE));
        // echo "<h1>".$this->sum(3,4)."</h1>";
         return $resultPage;
    }

    public function sum($a, $b){
        return $a + $b;
    }

    /**
     * Is the user allowed to view the page.
    *
    * @return bool
    */
    protected function _isAllowed()
    {

        return $this->_authorization->isAllowed(static::ADMIN_RESOURCE);
    }
}
