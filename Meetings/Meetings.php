<?php
class MeetingsFactory
{
	const TEAMS = 1;
	public static function getMeetings(int $provider_id): Meetings
	{
		switch($provider_id)
		{
			case self::TEAMS:
				return new Teems();
			default:
				throw new Exception('Unknown provider');
		}
	}
}
abstract class Meetings{
	abstract public function create(DateTime $startDate, DateTime $endDate
	, string $subject);
	abstract public function sechuale(DateTime $startDate, DateTime $endDate
	, string $subject);
	abstract public function join(string $meeting_id);
}