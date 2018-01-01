<?php 
namespace Mageplaza\HelloWorld\Model;
class Topic extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface,
\Mageplaza\HelloWorld\Model\Api\Data\TopicInterface
{
	const CACHE_TAG = 'mageplaza_topic';

	protected function _construct()
	{
		$this->_init('Mageplaza\HelloWorld\Model\ResourceModel\Topic');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getId(){
		return $this->getData('topic_id');
	}
	public function setId($value){
		$this->setData('topic_id', $value);
	}
	
	public function getTitle(){
		return $this->getData('title');
	}

	public function setTitle($value){
		$this->setData('title', $value);
	}
	
	public function getContent(){
		return $this->getData('content');
	}
	public function setContent($value){
		$this->setData('content', $value);
	}
	
	public function getCreationTime(){
		return $this->getData('created_at');
	}
	public function setCreationTime($value){
		$this->setData('created_at', time());
	}
}