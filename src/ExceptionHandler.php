<?php

namespace Luba;

use Luba\Framework\View, Log;

class ExceptionHandler
{
	public function handle($exception)
	{
		Log::exception($exception);
		
		if (defined('EXCEPTIONS_TEMPLATE'))
			$template = EXCEPTIONS_TEMPLATE;

		if (isset($template) && file_exists(view_path("$template.lb")))
			$view = new View($template, ['exception' => $exception]);
		else
			$view = new View('exceptions', ['exception' => $exception], __DIR__ . '/');

		echo $view->render();
		die;
	}
}