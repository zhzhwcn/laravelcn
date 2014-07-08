<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		if (Schema::hasTable('nodes'))
		{
			Node::create(array('name'=>'laravel','display_name'=>'laravel'));
		}
		
	}

}
