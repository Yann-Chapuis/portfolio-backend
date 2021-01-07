<?php

use Illuminate\Database\Seeder;
use App\Models\Date;

class DateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Date::class, 20)->create();
    }
}
