<?php
/**
 * Product Name: Mage2 Product Inquiry
 * Module Name: Mage2_Inquiry
 * Created By: Yogesh Shishangiya
 */

declare(strict_types=1);

namespace Mage2\Inquiry\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container;

/**
 * Class Inquiry
 *
 * @package Mage2\Inquiry\Block\Adminhtml
 */
class Inquiry extends Container
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_blockGroup     = 'Mage2_Inquiry';
        $this->_controller     = 'adminhtml_block';
        $this->_headerText     = __('Product Inquiry');
        $this->_addButtonLabel = __('Add New Inquiry');
        parent::_construct();
    }
}
