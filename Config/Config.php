<?php
abstract class Config
{
	protected string $tenant,
		$client_id,
		$client_secret,
		$callback,
		$scopes; 
	public function __construct()
	{
		$this->init();
	}
	abstract protected function init();
	abstract public function getConfig();
}