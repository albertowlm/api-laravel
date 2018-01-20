<?php

use Illuminate\Database\Seeder;

class PlanoDeSaudesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\PlanoDeSaude::class,10)->create();
    }
}
