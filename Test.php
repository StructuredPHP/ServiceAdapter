<?php

require_once 'boostrap.php';

use StructuredPHP\Example\Twitter\Config\TwitterConfig;
use StructuredPHP\Example\Twitter\TwitterService;
use StructuredPHP\ServiceAdapter\Registry;
use StructuredPHP\ServiceAdapter\Annotations\Service;

// $config = new TwitterConfig("1489541251-yzVy4H5OTiXklVMtBGCxmzwXR3lZ5WSlo1lL5Nz", "HVUHVj4uqmjw1ej4UK2XW1Ug0mPzzyuQZu9prVFTebc", "U9LnddmaBuAHeGjfQke9Kw", "shdqpy4KxR2QgzCUz4POLLK0JGyMUKuexs3gllhw");

// $result = $config->toConfig();

// var_dump($result);

$service = new TwitterService();

$reflect = new ReflectionClass($service);

$annotation = new Service(array());

$reflect_anno = new ReflectionObject($annotation);

$anno = Registry::getAnnotationReader()->getClassAnnotation($reflect, $reflect_anno->getName());

var_dump($anno);