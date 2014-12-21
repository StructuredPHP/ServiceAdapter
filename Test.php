<?php

require_once 'boostrap.php';

use StructuredPHP\Example\Twitter\Config\TwitterConfig;

$config = new TwitterConfig("1489541251-yzVy4H5OTiXklVMtBGCxmzwXR3lZ5WSlo1lL5Nz", "HVUHVj4uqmjw1ej4UK2XW1Ug0mPzzyuQZu9prVFTebc", "U9LnddmaBuAHeGjfQke9Kw", "shdqpy4KxR2QgzCUz4POLLK0JGyMUKuexs3gllhw");

$result = $config->toConfig();

var_dump($result);