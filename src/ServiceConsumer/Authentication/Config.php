<?php
namespace StructuredPHP\ServiceConsumer\Authentication;

use StructuredPHP\Common\Type\Object;
use StructuredPHP\ServiceConsumer\Registry;
use StructuredPHP\ServiceConsumer\Annotations\ConfigParam;

/**
 * Auth Config
 * 
 * 
 * @author haihao
 *
 */
abstract class Config extends Object {
	
	/**
	 * convert the configuration object to array 
	 * 
	 * @return array
	 */
	public function toConfig () {
		$reflect 	= new \ReflectionObject($this);
		$properties = $reflect->getProperties();
		$annotation = new ConfigParam(array());
		$anno_name	= (new \ReflectionClass($annotation))->getName();
		$result = array();
		foreach ($properties as $property) {
			$property->setAccessible(true);
			$auth_param = Registry::getAnnotationReader()->getPropertyAnnotation($property, $anno_name);
			if($auth_param) {
				$result[$auth_param->getName()] = $property->getValue($this);
			}
		}
		return $result;
	}
	
}