<?php
/**
 * Product Name: Mage2 Product Inquiry
 * Module Name: Mage2_Inquiry
 * Created By: Yogesh Shishangiya
 */

declare(strict_types=1);

namespace Mage2\Inquiry\Model\ResourceModel\Inquiry;

use Mage2\Inquiry\Model\Inquiry;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 *
 * @package Mage2\Inquiry\Model\ResourceModel\Inquiry
 */
class Collection extends AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = Inquiry::INQUIRY_ID;

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Mage2\Inquiry\Model\Inquiry', 'Mage2\Inquiry\Model\ResourceModel\Inquiry');
    }
}
