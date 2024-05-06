<?php
namespace Bluethinkinc\QuantityDropdown\ViewModel;

use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Block\ArgumentInterface;
#[\AllowDynamicProperties]

class ProductViewModel implements ArgumentInterface
{
    public const ENABLE_DISABLE ='bluethink_admin_quantitydropdown/general/enable';
    public const MAXQTY ='bluethink_admin_quantitydropdown/general/max_quantity_value';
    public const DROPDOWNTYPE ='bluethink_admin_quantitydropdown/general/dropdown_type';
    public const SHOWPRICEDROPDOWN ='bluethink_admin_quantitydropdown/general/show_price_in_dropdown';
    public const CUSTOMVALUE='bluethink_admin_quantitydropdown/general/custom_value';
    public const STARTQTY='bluethink_admin_quantitydropdown/general/start_qty';
    public const INCREMENTQTY='bluethink_admin_quantitydropdown/general/increment_qty';
    /**
     * This is a registry
     *
     * @var registry $registry
     */
    private $registry;
    /**
     * This is a storemanager
     *
     * @var storeManager $storeManager
     */
    private $storeManager;
    /**
     * This is a scopeConfig
     *
     * @var scopeConfig $scopeConfig
     */
    protected $scopeConfig;
    /**
     * This is a construct
     *
     * @param StoreManagerInterface $storeManager
     * @param ScopeConfigInterface $scopeConfig
     * @param registry $registry
     * @param \Magento\Framework\Pricing\Helper\Data $priceHelper
     */
    public function __construct(
        StoreManagerInterface $storeManager,
        ScopeConfigInterface $scopeConfig,
        Registry $registry,
        \Magento\Framework\Pricing\Helper\Data $priceHelper
    ) {
         $this->storeManager = $storeManager;
        $this->scopeConfig = $scopeConfig;
        $this->registry = $registry;
        $this->priceHelper = $priceHelper;
    }
    /**
     * This is a quantity dropdown enable disable value Get
     *
     * @return enable
     */
    public function enable()
    {
        return $this->scopeConfig->getValue(
            self::ENABLE_DISABLE,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a max qty value Get
     *
     * @return maxqty
     */
    public function maxqty()
    {
        return $this->scopeConfig->getValue(
            self::MAXQTY,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a dropdown type value Get
     *
     * @return dropdowntype
     */
    public function dropdowntype()
    {
        return $this->scopeConfig->getValue(
            self::DROPDOWNTYPE,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
     /**
      * This is a show price dropdown value Get
      *
      * @return showpricedropdown
      */
    public function showpricedropdown()
    {
        return $this->scopeConfig->getValue(
            self::SHOWPRICEDROPDOWN,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a custom value quntity value Get
     *
     * @return custom value
     */
    public function customvalue()
    {
        return $this->scopeConfig->getValue(
            self::CUSTOMVALUE,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a start quntity value Get
     *
     * @return startqty
     */
    public function startqty()
    {
        return $this->scopeConfig->getValue(
            self::STARTQTY,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a increment quntity value Get
     *
     * @return increment qty
     */
    public function incrementqty()
    {
        return $this->scopeConfig->getValue(
            self::INCREMENTQTY,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a getPriceHelper value Get
     *
     * @return getPriceHelper
     */
    public function getPriceHelper()
    {
        return $this->priceHelper;
    }
}
