<?php
/**
 * Product Name: Mage2 Product Inquiry
 * Module Name: Mage2_Inquiry
 * Created By: Yogesh Shishangiya
 */

declare(strict_types=1);

namespace Mage2\Inquiry\Model\Api\SearchCriteria\CollectionProcessor\FilterProcessor;

use Magento\Cms\Model\ResourceModel\Block\Collection;
use Magento\Framework\Api\Filter;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor\FilterProcessor\CustomFilterInterface;
use Magento\Framework\Data\Collection\AbstractDb;

/**
 * Class InquiryStoreFilter
 *
 * @package Mage2\Inquiry\Model\Api\SearchCriteria\CollectionProcessor\FilterProcessor
 */
class InquiryStoreFilter implements CustomFilterInterface
{
    /**
     * Apply custom store filter to collection
     *
     * @param Filter $filter
     * @param AbstractDb $collection
     * @return bool
     */
    public function apply(Filter $filter, AbstractDb $collection)
    {
        /** @var Collection $collection */
        $collection->addStoreFilter($filter->getValue(), false);

        return true;
    }
}
