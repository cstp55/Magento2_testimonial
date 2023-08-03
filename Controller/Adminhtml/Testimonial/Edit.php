<?php
namespace Chandan\Testimonial\Controller\Adminhtml\Testimonial;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Edit extends Action
{
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $resultPage = $this->resultPageFactory->create();

        if ($id) {
            $resultPage->getConfig()->getTitle()->prepend(__('Edit Testimonial'));
        } else {
            $resultPage->getConfig()->getTitle()->prepend(__('Add Testimonial'));
        }

        return $resultPage;
    }
}
