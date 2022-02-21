<?php
declare(strict_types=1);

/**
 * Wdevs
 *
 * @category    Wdevs
 * @package     Wdevs_CustomBar
 * @copyright   Copyright (c) Wdevs (https://wdevs.com/)
 */

namespace Wdevs\CustomBar\Plugin\CustomerData;

use Magento\Customer\Helper\Session\CurrentCustomer;
use Magento\Customer\Helper\View;
use Magento\Customer\Api\GroupRepositoryInterface;

/**
 * Customer Plugin for CustomerData add customer group_name to view on top bar.
 */
class Customer
{
    /**
     * @var CurrentCustomer
     */
    protected $currentCustomer;

    /**
     * @var View
     */
    protected $customerViewHelper;

    /**
     * @var GroupRepositoryInterface
     */
    protected $customerGroupRepository;

    /**
     * @param CurrentCustomer $currentCustomer
     * @param View $customerViewHelper
     * @param GroupRepositoryInterface $customerGroupRepository
     */
    public function __construct(
        CurrentCustomer $currentCustomer,
        View $customerViewHelper,
        GroupRepositoryInterface $customerGroupRepository
    ) {
        $this->currentCustomer = $currentCustomer;
        $this->customerViewHelper = $customerViewHelper;
        $this->customerGroupRepository = $customerGroupRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function afterGetSectionData()
    {
        if (!$this->currentCustomer->getCustomerId()) {
            return [];
        }
        $customer = $this->currentCustomer->getCustomer();
        $group_id = $customer->getGroupId();
        $group = $this->customerGroupRepository->getById((int) $group_id);
        $group_name = $group->getCode();

        return [
            'fullname' => $this->customerViewHelper->getCustomerName($customer),
            'firstname' => $customer->getFirstname(),
            'group_name' => $group_name
        ];
    }
}
