<?php
/**
 * 
 * Monujo
 *
 * @author Alessandro Arnodo
 *
 *
 */
class UserTableSeeder extends Seeder {

	public function run(){
		$data = array(
				'email' => 'admin@admin.com',
				'password' => 'admin',
				'first_name' => 'john',
				'last_name' => 'doe',
				'activated'   => 1,
				'permissions' => array(
						'admin' => 1,
						'user'  => 1
				)
		);

		$user = Sentry::getUserProvider()->create($data);
	}

}