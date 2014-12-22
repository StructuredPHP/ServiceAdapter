<?php
namespace StructuredPHP\ServiceAdapter\Enums;

use StructuredPHP\Common\Type\Enum;

/**
 * ServiceType
 * 
 * @author haihao
 */
class ServiceType extends Enum {
	
	const REST = "rest";
	
	const SOAP = "soap";
	
	const OBJECT = "object";
	
}