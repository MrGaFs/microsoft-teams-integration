<?php
class TeamsConfig extends Config
{
	public function __construct()
	{
		parent::__construct();
	}
	public function init(){
		$this->tenant = 'YOUR_TENANT_ID';
		$this->client_id = 'YOUR_CLIENT_ID';
		$this->client_secret = 'YOUR_CLIENT_SECRET';
		$this->callback = 'localhost/callback.php';
		$this->scopes = 'YOUR_SCOPES';
	}
	public function getConfig()
	{
		return [
			'tenant' => $this->tenant,
			'client_id' => $this->client_id,
			'client_secret' => $this->client_secret,
			'callback' => $this->callback,
			'scopes' => $this->scopes
		];
	}
}