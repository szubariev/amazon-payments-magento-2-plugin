<?php

namespace Amazon\Login\Block;

use Amazon\Core\Helper\Data;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Login extends Template
{
    /**
     * @var Data
     */
    protected $coreHelper;

    public function __construct(Context $context, Data $coreHelper)
    {
        $this->coreHelper = $coreHelper;
        parent::__construct($context);
    }

    protected function _toHtml()
    {
        if (!$this->coreHelper->isLoginButtonEnabled()) {
            return '';
        }

        return parent::_toHtml();
    }
}
