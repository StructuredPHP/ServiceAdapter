<?php
namespace StructuredPHP\ServiceAdapter\Annotations;

use Doctrine\Common\Annotations\Annotation;

/**
 * 
 * Determine if a class is annotation
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