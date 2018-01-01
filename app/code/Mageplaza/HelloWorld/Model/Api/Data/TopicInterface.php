<?php
namespace Mageplaza\HelloWorld\Model\Api\Data;
interface TopicInterface
{
	public function getId();
	public function setId($value);
	
	public function getTitle();
	public function setTitle($value);
	
	public function getContent();
	public function setContent($value);
	
	public function getCreationTime();
	public function setCreationTime($value);
}