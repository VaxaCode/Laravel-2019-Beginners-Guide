<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //POPULATE THE INSTANCES YOU NEED
        factory('App\Job',  20)->create();
    }
}
