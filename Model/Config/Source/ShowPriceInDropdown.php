<?php

namespace Bluethinkinc\QuantityDropdown\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Return ShowPriceInDropdown
 */
class ShowPriceInDropdown implements OptionSourceInterface
{
    /**
     * Function toOptionArray
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'price-per-one', 'label' => __('Price Per Item')],
            ['value' => 'total-price', 'label' => __('Total Price')],
            ['value' => 'none', 'label' => __('None')]
        ];
    }
}
