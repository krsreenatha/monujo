<?php namespace Monujo\Model;

use Cartalyst\Sentry\Groups\Eloquent\Group as SentryGroupModel;

class Group extends SentryGroupModel {

	public function created_at()
	{
		return \ExpressiveDate::make($this->created_at)->getRelativeDate();
	}
		
	public function updated_at()
	{
		return \ExpressiveDate::make($this->updated_at)->getRelativeDate();
	}

}
