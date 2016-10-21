<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * @var array
	 */
	protected $tables = [
		'users',
		'categories',
		'books'
	];

	protected $seeders = [
		'UsersTableSeeder',
		'CategoriesTableSeeder',
		'BooksTableSeeder'
	];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();

    	$this->cleanDatabase();

        foreach($this->seeders as $seeder)
        {
        	$this->call($seeder);
        }
    }

    /**
     * Clean our the database for a new seed
     * 
     * @return void
     */
    private function cleanDatabase() {
    	 DB::statement('SET FOREIGN_KEY_CHECKS=0');

    	 foreach($this->tables as $table)
    	 {
    	 	DB::table($table)->truncate();
    	 }

    	 DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
