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
	}

}

class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'username'  => 'B',
            'password' => Hash::make('guest'),
            'tipo'=>'2',
            'confirmed'=>'1',
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime           
            
        ));
    }    
}