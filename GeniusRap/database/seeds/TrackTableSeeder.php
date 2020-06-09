<?php
use App\Track;
use Illuminate\Database\Seeder;

class TrackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Track::class, 100)->create();
    }
}
