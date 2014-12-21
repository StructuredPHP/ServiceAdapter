<?php
namespace StructuredPHP\ServiceConsumer;

use StructuredPHP\Common\Type\Object;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;
use StructuredPHP\ServiceConsumer\Service\Interfaces\IService;
use Doctrine\Common\Annotations\AnnotationReader;

/**
 * Client Factory
 * 
 * 
 * @author haihao
 *
 */
class Registry extends Object {
	
	/**
	 * Register Class Loader
	 * 
	 * @param ClassLoader $loader
	 * @return ClassLoader
	 */
	public static function registerLoader(ClassLoader $loader) {
		AnnotationRegistry::registerLoader(array($loader, "loadClass"));
		return $loader;
	}
	
	/**
	 * Get Annotation Reader 
	 * 
	 * @return \Doctrine\Common\Annotations\AnnotationReader
	 */
	public static function getAnnotationReader() {
		return new AnnotationReader();
	}
	
	
	/**
	 * Get Service
	 * 
	 * @param IService $service
	 * @return IService
	 */
	public static function getService(IService $service) {
		return $service;
	}
	
	
	
}