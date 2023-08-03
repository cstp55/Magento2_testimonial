<?php
namespace Chandan\Testimonial\Block\Adminhtml\Testimonial;

use Magento\Backend\Block\Widget\Context;
use Magento\Backend\Block\Widget\Form\Container;

class Edit extends Container
{
    protected function _construct()
    {
        $this->_objectId = 'id';
        $this->_controller = 'adminhtml_testimonial';
        $this->_blockGroup = 'Chandan_Testimonial';

        parent::_construct();

        $this->buttonList->update('save', 'label', __('Save Testimonial'));
        $this->buttonList->update('delete', 'label', __('Delete Testimonial'));
    }

    public function getHeaderText()
    {
        return __('Edit Testimonial');
    }
}
