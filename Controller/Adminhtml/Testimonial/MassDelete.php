<?php
namespace Chandan\Testimonial\Controller\Adminhtml\Testimonial;

use Magento\Backend\App\Action;
use Magento\Framework\Exception\LocalizedException;

class MassDelete extends Action
{
    protected $testimonialFactory;

    public function __construct(
        Action\Context $context,
        \Chandan\Testimonial\Model\TestimonialFactory $testimonialFactory
    ) {
        parent::__construct($context);
        $this->testimonialFactory = $testimonialFactory;
    }

    public function execute()
    {
        $testimonialIds = $this->getRequest()->getParam('testimonial');
        if (!is_array($testimonialIds) || empty($testimonialIds)) {
            $this->messageManager->addErrorMessage(__('Please select testimonial(s) to delete.'));
        } else {
            try {
                foreach ($testimonialIds as $testimonialId) {
                    $testimonial = $this->testimonialFactory->create();
                    $testimonial->load($testimonialId);
                    $testimonial->delete();
                }
                $this->messageManager->addSuccessMessage(__('Selected testimonials have been deleted.'));
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        }
        $this->_redirect('*/*/');
    }
}
