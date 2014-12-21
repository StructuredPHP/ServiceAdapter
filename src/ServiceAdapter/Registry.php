<?php
namespace StructuredPHP\ServiceAdapter;

use StructuredPHP\Common\Type\Object;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;
use Doctrine\Common\Annotations\AnnotationReader;

/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2015 StructuredPHP Project
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 */

/**
 * Client Factory
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

	
}