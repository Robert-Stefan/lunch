<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Placelist;

class PlacelistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*for($i = 0; $i < 5; $i++) {
            $new_place = new Placelist();

            $new_place->title = 'Restaurant title ' . ($i + 1);
            $new_place->slug = Str::slug($new_place->title. '-');
            $new_place->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perspiciatis sit, eum dolore eos deserunt molestias, accusantium animi quidem vel, facere delectus reiciendis unde odio alias nostrum ea omnis accusamus?';

            $new_place->save();
        }*/
    }
}
