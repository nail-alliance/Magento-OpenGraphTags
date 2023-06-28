<?php

namespace Nailalliance\OpenGraphTags\Block;

class GetCurrent extends \Magento\Framework\View\Element\Template
{
    protected $_registry;
    private $urlInterface;
    protected $_pageTitle;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\UrlInterface $urlInterface,
        \Magento\Framework\View\Page\Title $pageTitle,
        array $data = []
    ) {
        $this->_registry = $registry;
        $this->urlInterface = $urlInterface;
        $this->_pageTitle = $pageTitle;
        parent::__construct($context, $data);
    }

    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getCurrentCategory()
    {
        return $this->_registry->registry('current_category');
    }

    public function getCurrentProduct()
    {
        return $this->_registry->registry('current_product');
    }

    public function getCurrentUrl()
    {
        return $this->urlInterface->getCurrentUrl();
    }

    public function getBaseUrl()
    {
        return $this->urlInterface->getBaseUrl();
    }

    public function getPageTitle()
    {
        return $this->_pageTitle->getShort();
    }
}
