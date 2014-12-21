<?php
namespace StructuredPHP\Example\Twitter\Config;

use StructuredPHP\ServiceConsumer\Authentication\Config;
use StructuredPHP\ServiceConsumer\Annotations\ConfigParam;

/**
 * 
 * Twitter Configuration
 * 
 * @author haihao
 *
 */
class TwitterConfig extends Config {
	
	/**
	 * @ConfigParam(name="access_token")
	 */
	protected $access_token;
	
	/**
	 * @ConfigParam(name="access_secret")
	 */
	protected $access_secret;
	
	/**
	 * @ConfigParam(name="api_key")
	 */
	protected $api_key;
	
	/**
	 * @ConfigParam(name="api_secret")
	 */
	protected $api_secret;
	
	
	public function __construct($access_token, $access_secret, $api_key, $api_secret) {
		$this->access_token = $access_token;
		$this->access_secret = $access_secret;
		$this->api_key = $api_key;
		$this->api_secret = $api_secret;
	}
}