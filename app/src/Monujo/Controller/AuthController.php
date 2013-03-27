<?php namespace Monujo\Controller;

use View;
use Sentry;
use Validator;
use Input;
use Redirect;
use Session;
use Lang;

/**
 * 
 * Monujo
 *
 * @author Alessandro Arnodo
 *
 *
 */
class AuthController extends BaseController {

	public function getLogin()
	{
		// Are we logged in?
		if (Sentry::check())
		{
			return Redirect::to('/');
		}

		// Show the page
		return View::make('login');
	}

	public function postLogin()
	{
		// Declare the rules for the form validation
		$rules = array(
				'email'    => 'required|email',
				'password' => 'required'
		);

		// Validate the inputs
		$validator = Validator::make(Input::all(), $rules);

		// Check if the form validates with success
		if ($validator->passes())
		{
			try
			{
				// Try to log the user in
				if (Sentry::authenticate(Input::only('email', 'password'), Input::get('remember-me', 0)))
				{
					// Redirect to the users page
					return Redirect::to("login")->with('success', Lang::get('auth.messages.login.success'));
				}

				// Redirect to the login page
				return Redirect::to('account/login')->with('error', Lang::get('auth.messages.login.error'));
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
			{
				$error = 'account_not_found';
			}
			catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
			{
				$error = 'account_not_activated';
			}
			catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
			{
				$error = 'account_suspended';
			}
			catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
			{
				$error = 'account_banned';
			}

			// Redirect to the login page
			return Redirect::to('login')->with('error', Lang::get('auth.' . $error));
		}

		// Something went wrong
		return Redirect::to('login')->withInput()->withErrors($validator);
	}
	
	public function getLogout()
	{
		// Log the user out
		Sentry::logout();
	
		// Redirect to the users page
		return Redirect::to('/')->with('success', 'You have successfully logged out!');
	}


}
