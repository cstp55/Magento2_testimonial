<?php
namespace Chandan\Testimonial\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Chandan\Testimonial\Model\TestimonialFactory;

class Data extends AbstractHelper
{
    protected $testimonialFactory;

    public function __construct(
        Context $context,
        TestimonialFactory $testimonialFactory
    ) {
        parent::__construct($context);
        $this->testimonialFactory = $testimonialFactory;
    }

    public function getTestimonials()
    {
        $testimonialCollection = $this->testimonialFactory->create()->getCollection();
        $testimonialCollection->addFieldToFilter('approval_status', 1);
        $testimonialCollection->addFieldToFilter('status', 1);
        return $testimonialCollection;
    }
}
