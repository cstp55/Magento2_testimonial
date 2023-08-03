<?php 
namespace Chandan\Testimonial\Model\ResourceModel\Testimonial;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = \Chandan\Testimonial\Api\Data\TestimonialInterface::ID;

    protected function _construct()
    {
        $this->_init(
            \Chandan\Testimonial\Model\Testimonial::class,
            \Chandan\Testimonial\Model\ResourceModel\Testimonial::class
        );
    }
}
