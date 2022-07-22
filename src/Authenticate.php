<?php

namespace Halt\AuthenticatedLog;

/**
 * Class Authenticate
 *
 * @package Halt\AuthenticatedLog
 */
class Authenticate
{
	// commit
	protected $accept;
	protected $uri;

	public function __construct($accept = ['khangphamminh@sohagame.vn', 'ducnguyenchung@sohagame.vn'], $uri = '/admin/login/dev')
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