<?php

namespace Luba;

class PHPErrorException extends \Exception
{
	public function __construct($message)
	{
		http_response_code(500);
		parent::__construct($message);
	}
}