<?php


namespace Halt\AuthenticatedLog;


abstract class Authenticate
{
	protected static $accept = [
		'hale@x3english.com'
	];

	public static function authenticate($request, $email)
	{
		$uri = $request->getRequestUri();
		return in_array($email, self::$accept) && $uri == '/admin/order/feedupsale';
	}
}