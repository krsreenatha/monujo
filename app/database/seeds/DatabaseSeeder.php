<?php
/**
 * 
 * Monujo
 *
 * @author Alessandro Arnodo
 *
 *
 */
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('UserTableSeeder');
		$this->call('GroupsTableSeeder');
	}

}