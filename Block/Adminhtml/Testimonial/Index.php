<?php
namespace Chandan\Testimonial\Block\Adminhtml\Testimonial;

use Magento\Backend\Block\Widget\Grid\Container;

class Index extends Container
{
    protected function _construct(\Chandan\Testimonial\Helper\Data $helper)
    {
        $this->_controller = 'adminhtml_testimonial';
        $this->_blockGroup = 'Chandan_Testimonial';
        $this->_headerText = __('Manage Testimonials');
        $this->_helper = $helper;
        parent::_construct();
    }
    public function gethelper()
    {
        return $this->_helper;
    }
}
