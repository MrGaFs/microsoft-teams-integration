<?php
class Teems extends Meetings
{
	private string $accessToken;
	public function __construct()
	{
		require "signin.php";
	}

	public function setAccessToken(string $accessToken)
	{
		$this->accessToken = $accessToken;
	}

	public function create(DateTime $startDate, DateTime $endDate
	, string $subject){

	}
		
	public function sechuale(DateTime $startDate, DateTime $endDate
	, string $subject){

	}
		
	public function join(string $meeting_id){

	}
}