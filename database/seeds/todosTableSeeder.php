<?php

use Illuminate\Database\Seeder;

class todosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\todos::class,7)->create();
    }
}
