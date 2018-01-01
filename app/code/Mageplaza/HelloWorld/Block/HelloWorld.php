<?php
namespace Mageplaza\HelloWorld\Block;
class HelloWorld extends \Magento\Framework\View\Element\Template
{
    protected $_logo;   
    
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Theme\Block\Html\Header\Logo $logo,
        array $data = []
    )
    {       
        $this->_logo = $logo;
        parent::__construct($context, $data);
    }
    
    /**
     * Check if current url is url for home page
     *
     * @return bool
     */
    public function isHomePage()
    {   
        return $this->_logo->isHomePage();
    }
}
?>