<?php
/**
 *
 * Monujo
 *
 * @author Alessandro Arnodo
 *
 *
 */
class UsersGroupsTableSeeder extends Seeder {

	public function run(){
		try
		{
			$group = Sentry::getGroupProvider()->create(array(
					'name'        => 'Admin',
					'permissions' => array(
							'admin' => 1,
							'users' => 1
					)
			));

		}
		catch (Cartalyst\Sentry\Groups\GroupExistsException $e)
		{
			//TODO manage error
		}

	}

}