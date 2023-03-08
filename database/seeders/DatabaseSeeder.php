<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

         DB::table('products')->insert([

        'type'      =>  'Bali-og',
        'desc'      =>  'Bali-og, also spelled baliog, are traditional layered necklaces of various ethnic groups
                        in the islands of Visayas and Mindanao in the Philippines. They consist of chokers and necklaces
                        with a fringe of beads and other ornaments. More than one is usually worn, layered over each other.',
        'img'       =>  'assets/img/necklace.jpg'
        ]);

        DB::table('products')->insert([

        'type'      =>  'Kudyapi',
        'desc'      =>  'The kutiyapi, or kudyapi, is a Philippine two-stringed, fretted boat-lute.
                         It is four to six feet long with nine frets made of hardened beeswax.
                         The instrument is carved out of solid soft wood such as that from the jackfruit tree.',
     'img'       =>  'assets/img/kudyapi.jpg'
        ]);


    }
}