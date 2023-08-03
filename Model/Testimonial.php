<?php
namespace Chandan\Testimonial\Model;

use Magento\Framework\Model\AbstractModel;
use Chandan\Testimonial\Api\Data\TestimonialInterface;
use Chandan\Testimonial\Model\ResourceModel\Testimonial as TestimonialResourceModel;

class Testimonial extends AbstractModel implements TestimonialInterface
{
    protected $_idFieldName = self::ID;

    protected function _construct()
    {
        $this->_init(TestimonialResourceModel::class);
    }

    public function getId()
    {
        return $this->_getData(self::ID);
    }

    public function getCustomerName()
    {
        return $this->_getData(self::CUSTOMER_NAME);
    }

    public function getMessage()
    {
        return $this->_getData(self::MESSAGE);
    }

    public function getApprovalStatus()
    {
        return $this->_getData(self::APPROVAL_STATUS);
    }

    public function getStatus()
    {
        return $this->_getData(self::STATUS);
    }

    public function getCreatedAt()
    {
        return $this->_getData(self::CREATED_AT);
    }

    public function getUpdatedAt()
    {
        return $this->_getData(self::UPDATED_AT);
    }

    // Implement the rest of the getter and setter methods...
}

