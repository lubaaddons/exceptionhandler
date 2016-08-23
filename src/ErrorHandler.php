<?php

namespace Luba;

class ErrorHandler
{
	public function handle($number, $message, $file, $line)
	{
		throw new PHPErrorException("Error in $file line $line:\r\n$message");
	}
}