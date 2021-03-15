<?php
/**
 * Product Name: Mage2 Product Inquiry
 * Module Name: Mage2_Inquiry
 * Created By: Yogesh Shishangiya
 */

declare(strict_types=1);

namespace Mage2\Inquiry\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Inquiry
 *
 * @package Mage2\Inquiry\Model\ResourceModel
 */
class Inquiry extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        // Table Name and Primary Key column
        $this->_init('mage2_inquiry', 'inquiry_id');
    }
}
