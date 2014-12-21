<?php
namespace StructuredPHP\ServiceAdapter\Annotations;

use Doctrine\Common\Annotations\Annotation;

/**
 * 
 * ConfigParam
 * 
 * @author haihao
 * 
 * @Annotation
 */
class ConfigParam extends Annotation {
	
	protected $name;
	
	public function getName() {
		return $this->name;
	}
	
}