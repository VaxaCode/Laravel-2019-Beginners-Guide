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
      //POPULATE THE INSTANCES YOU NEED
      factory('App\User',  3)->create();
    }
}
