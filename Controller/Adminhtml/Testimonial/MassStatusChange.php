<?php
namespace Chandan\Testimonial\Controller\Adminhtml\Testimonial;

use Magento\Backend\App\Action\Context;
use Chandan\Testimonial\Model\ResourceModel\Testimonial\CollectionFactory;

class MassStatusChange extends \Magento\Backend\App\Action
{
    protected $testimonialCollectionFactory;

    public function __construct(
        Context $context,
        CollectionFactory $testimonialCollectionFactory
    ) {
        parent::__construct($context);
        $this->testimonialCollectionFactory = $testimonialCollectionFactory;
    }

    public function execute()
    {
        $testimonialIds = $this->getRequest()->getParam('testimonial');
        $newStatus = (int) $this->getRequest()->getParam('status');
        $updated = 0;

        if (!empty($testimonialIds)) {
            try {
                $testimonialCollection = $this->testimonialCollectionFactory->create();
                $testimonialCollection->addFieldToFilter('id', ['in' => $testimonialIds]);
                foreach ($testimonialCollection as $testimonial) {
                    $testimonial->setStatus($newStatus)->save();
                    $updated++;
                }
                $this->messageManager->addSuccessMessage(__('Changed status for %1 testimonials.', $updated));
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(__('An error occurred: %1', $e->getMessage()));
            }
        } else {
            $this->messageManager->addErrorMessage(__('No testimonials selected.'));
        }

        $this->_redirect('*/*/');
    }
}
