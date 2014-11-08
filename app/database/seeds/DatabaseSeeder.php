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
    DB::table('users')->insert(array(
            'username'  => 'A',
            'password' => Hash::make('admin'),
            'tipo'=>'1',
            'confirmed'=>'1',
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime 
        ));
 
        DB::table('users')->insert(array(
            'username'  => 'B',
            'password' => Hash::make('guest'),
            'tipo'=>'1',
            'confirmed'=>'2',
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime 
        ));
/*    

        User::create(array(
            'username'  => 'A',
            'password' => Hash::make('admin'),
            'tipo'=>'1',
            'confirmed'=>'1',
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime           
        ),array(
            'username'  => 'B',
            'password' => Hash::make('guest'),
            'tipo'=>'1',
            'confirmed'=>'2',
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime         
        )
        );
*/    
    } 
    
}