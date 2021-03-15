<?php
/**
 * Product Name: Mage2 Product Inquiry
 * Module Name: Mage2_Inquiry
 * Created By: Yogesh Shishangiya
 */

declare(strict_types=1);

namespace Mage2\Inquiry\Api;

use Mage2\Inquiry\Api\Data\InquirySearchResultsInterface;
use Mage2\Inquiry\Api\Data\InquiryInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Interface InquiryRepositoryInterface
 *
 * @package Mage2\Inquiry\Api
 */
interface InquiryRepositoryInterface
{
    /**
     * Save Inquiry.
     *
     * @param InquiryInterface $inquiry
     * @return InquiryInterface
     * @throws CouldNotSaveException
     * @throws NoSuchEntityException
     */
    public function save(InquiryInterface $inquiry);

    /**
     * Retrieve inquiry by ID.
     *
     * @param int $inquiry_id
     * @return InquiryInterface
     * @throws NoSuchEntityException
     */
    public function getById($inquiry_id);

    /**
     * Retrieve inquiries matching the specified criteria.
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return InquirySearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * Delete inquiry
     *
     * @param InquiryInterface $inquiry
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(Data\InquiryInterface $inquiry);

    /**
     * Delete Inquiry by given Inquiry Identity
     *
     * @param string $inquiryId
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function deleteById($inquiry_id);
}
