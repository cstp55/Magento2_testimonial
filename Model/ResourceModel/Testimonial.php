<?php
// Resource Model
namespace Chandan\Testimonial\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Testimonial extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('chandan_testimonial', 'testimonial_id');
    }
}