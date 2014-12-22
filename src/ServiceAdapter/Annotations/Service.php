<?php
namespace StructuredPHP\ServiceAdapter\Annotations;

use Doctrine\Common\Annotations\Annotation;
use StructuredPHP\ServiceAdapter\Enums\ServiceType;

/**
 * Service
 * 
 * @author haihao
 * 
 * @Annotation
 * @Target({"CLASS"})
 */
class Service extends Annotation {		
	
	/**
	 * @Enum({"soap","rest","object"})
	 */
	protected $type;		

	protected $service_container;
	
	protected $resource;
	
	
	
	
}