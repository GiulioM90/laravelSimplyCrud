<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $beers = ['arrugant', 'Peroni' , 'Nastro azzurro', 'dreher','Menabrea','Heiniken','Guinness'];
        foreach($beers as $beer){
            DB::table('beers')->insert([
                'name'=> $beer,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }

}
