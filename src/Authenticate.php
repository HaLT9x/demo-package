<?php

namespace Halt\AuthenticatedLog;

/**
 * Class Authenticate
 *
 * @package Halt\AuthenticatedLog
 */
class Authenticate
{
	protected $accept;
	protected $uri;

	public function __construct($accept = ['hale@x3english.com'], $uri = '/admin/order/feedupsale')
	{
		$this->accept = $accept;
		$this->uri = $uri;
	}

	public function authenticate($request, $email)
	{
		$uri = $request->getRequestUri();
		return in_array($email, $this->accept) && $this->uri == $uri;
	}
}