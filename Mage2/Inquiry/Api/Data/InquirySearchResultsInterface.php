<?php
/**
 * Product Name: Mage2 Product Inquiry
 * Module Name: Mage2_Inquiry
 * Created By: Yogesh Shishangiya
 */

declare(strict_types=1);

namespace Mage2\Inquiry\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface InquirySearchResultsInterface
 *
 * @package Mage2\Inquiry\Api\Data
 */
interface InquirySearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get inquiry list.
     *
     * @return InquiryInterface[]
     */
    public function getItems();

    /**
     * Set inquiry list.
     *
     * @param InquiryInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
