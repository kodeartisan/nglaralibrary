<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		'name' => 'admin',
        		'email' => 'admin@gmail.com',
        		'password' => bcrpyt('qweasd123')
        	],
        	[
        		'name' => 'guest',
        		'email' => 'guest@gmail.com',
        		'password' => bcrpyt('qweasd123')
        	]
        ];

        DB::table('users')->insert($data);
    }
}
