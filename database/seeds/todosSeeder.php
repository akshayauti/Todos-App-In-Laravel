<?php

use Carbon\Factory;
use Illuminate\Database\Seeder;

class todosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\todos::class,5)->create();
    }
}
