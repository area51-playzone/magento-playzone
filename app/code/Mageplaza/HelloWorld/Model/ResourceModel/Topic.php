<?php
namespace Mageplaza\HelloWorld\Model\ResourceModel;
class Topic extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	protected function _construct()
	{
		$this->_init('mageplaza_topic', 'topic_id');
	}
}