<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
=======
        // run sql scripts for all tables
        DB::unprepared(file_get_contents('database/sql_scripts/child.sql')); 
        DB::unprepared(file_get_contents('database/sql_scripts/entries.sql')); 
        DB::unprepared(file_get_contents('database/sql_scripts/results.sql')); 
        DB::unprepared(file_get_contents('database/sql_scripts/summernotes.sql')); 
        DB::unprepared(file_get_contents('database/sql_scripts/users.sql')); 
        DB::unprepared(file_get_contents('database/sql_scripts/zvalues.sql')); 



>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
    }
}
