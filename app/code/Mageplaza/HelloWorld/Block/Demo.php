<?php
namespace Mageplaza\HelloWorld\Block;
class Demo extends \Magento\Framework\View\Element\Template
{
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context
	)
	{
		parent::__construct($context);
	}

	public function fromDemoBlock()
	{
		return __('Hello from demo block');
	}
}