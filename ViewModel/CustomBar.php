<?php
declare(strict_types=1);

/**
 * Wdevs
 *
 * @category    Wdevs
 * @package     Wdevs_CustomBar
 * @copyright   Copyright (c) Wdevs (https://wdevs.com/)
 */

namespace Wdevs\CustomBar\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class CustomBar implements ArgumentInterface
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * Notification constructor.
     *
     * @param ScopeConfigInterface    $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig    = $scopeConfig;
    }

    /**
     * Is enabled.
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return (bool)$this->getConfigValue('general', 'enabled');
    }

    /**
     * Get config value
     *
     * @param string $group
     * @param string $field
     *
     * @return mixed
     */
    private function getConfigValue(string $group, string $field)
    {
        $path = "custom_bar/$group/$field";

        return $this->scopeConfig->getValue($path);
    }
}
