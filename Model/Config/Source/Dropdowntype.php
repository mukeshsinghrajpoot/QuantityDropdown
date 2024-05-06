<?php

namespace Bluethinkinc\QuantityDropdown\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Return Dropdowntype
 */
class Dropdowntype implements OptionSourceInterface
{
    /**
     * Function toOptionArray
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '0', 'label' => __('Default Value')],
            ['value' => '1', 'label' => __('Quantity Increment Value')],
            ['value' => '2', 'label' => __('Custom Value')]
        ];
    }
}
