<?php namespace Monujo\Controller;

use View;
use Controller;

/**
 * 
 * Monujo
 *
 * @author Alessandro Arnodo
 *
 *
 */
class BaseController extends Controller {

	public function __construct()
	{
		// CSRF Protection
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

}
