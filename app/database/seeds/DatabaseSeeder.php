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

		$this->call('UserTableSeeder');
		$this->call('BGTableSeeder');
	}


}

class UserTableSeeder extends Seeder {
    public function run(){
        DB::table('users')->delete();
        DB::table('users')->insert(array(
            array(
                'email' => 'jsk9260@gmail.com',
                'password' => Hash::make('jsk9260')
            )
        ));
    }
}

class BGTableSeeder extends Seeder {
    public function run(){
        DB::table('BG')->delete();
        DB::table('BG')->insert(array(
            array(
                'createdDate' => '9/16/2013',
                'createdTime' => '12:33:00 AM',
                'level' => 120.0
            )
        ));
    }
}