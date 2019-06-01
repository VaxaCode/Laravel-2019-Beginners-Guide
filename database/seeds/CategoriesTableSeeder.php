<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //POPULATE THE INSTANCES YOU NEED
      factory('App\Category',  6)->create();
    }
}
