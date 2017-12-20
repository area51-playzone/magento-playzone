<?php
namespace Mageplaza\HelloWorld\Controller\Test;
class Forward extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{
		// redirect to different controller in different module
		// _redirect('module/controller/action')
		// to redirect within same controller
		// _redirect('*/*/action')
		// _forward(action, controller, module, params)
		$this->_redirect('helloworld/index/index');
	}
}