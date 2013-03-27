<?php namespace Monujo\Controller;

use View;
use Sentry;
/**
 * 
 * Monujo
 *
 * @author Alessandro Arnodo
 *
 *
 */
class HomeController extends BaseController {

	
	public function getHome()
	{
		return View::make('home');
	}

}
