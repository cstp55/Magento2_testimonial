<?php
namespace Chandan\Testimonial\Api\Data;

interface TestimonialInterface
{
    const ID = 'id';
    const CUSTOMER_NAME = 'customer_name';
    const MESSAGE = 'message';
    const APPROVAL_STATUS = 'approval_status';
    const STATUS = 'status';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function getId();
    public function getCustomerName();
    public function getMessage();
    public function getApprovalStatus();
    public function getStatus();
    public function getCreatedAt();
    public function getUpdatedAt();

    public function setId($id);
    public function setCustomerName($customerName);
    public function setMessage($message);
    public function setApprovalStatus($approvalStatus);
    public function setStatus($status);
    public function setCreatedAt($createdAt);
    public function setUpdatedAt($updatedAt);
}
