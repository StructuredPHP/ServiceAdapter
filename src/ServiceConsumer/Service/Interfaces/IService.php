<?php
namespace StructuredPHP\ServiceConsumer\Service\Interfaces;

/**
 * Service Interface
 * 
 * @author haihao
 * 
 */
interface IService {
	
	public function setCommunicationObject($client);
		
	public function setAuthConfig($auth);
	
	public function getAuthConfig();
}