<?php
namespace StructuredPHP\ServiceAdapter\Annotations;

use Doctrine\Common\Annotations\Annotation;

/**
 * End Point
 * 
 * @author haihao
 * 
 * @Annotation
 */
class Endpoint extends Annotation {
	
	protected $resource;
	
	protected $method;
	
	public function getResource() {
		return $this->resource;
	}
	
	public function getMethod() {
		return $this->method;
	}
	
}
