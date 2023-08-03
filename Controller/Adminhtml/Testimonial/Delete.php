<?php
namespace Chandan\Testimonial\Controller\Adminhtml\Testimonial;

use Magento\Backend\App\Action;
use Magento\Framework\Exception\LocalizedException;

class Delete extends Action
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
        $id = $this->getRequest()->getParam('id');
        if ($id) {
            try {
                $testimonial = $this->testimonialFactory->create();
                $testimonial->load($id);
                $testimonial->delete();
                $this->messageManager->addSuccessMessage(__('Testimonial has been deleted.'));
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        }
        $this->_redirect('*/*/');
    }
}
