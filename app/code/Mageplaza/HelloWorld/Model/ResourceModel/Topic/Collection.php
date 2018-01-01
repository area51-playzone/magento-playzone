<?php
namespace Mageplaza\HelloWorld\Model\ResourceModel\Topic;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected function _construct()
	{
		$this->_init('Mageplaza\HelloWorld\Model\Topic', 'Mageplaza\HelloWorld\Model\ResourceModel\Topic');
	}
}