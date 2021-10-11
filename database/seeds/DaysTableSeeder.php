<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Day;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = ['Monday - 13:00 to 14:00', 'Tuesday - 13:00 to 14:00', 'Wednesday - 13:00 to 14:00', 'Thursday - 13:00 to 14:00', 'Friday - 13:00 to 14:00'];

        foreach ($days as $day) {
            $new_day = new Day();
            $new_day->name = $day;
            $new_day->slug = Str::slug($day, '-');
            $new_day->save();
        }
    }
}
