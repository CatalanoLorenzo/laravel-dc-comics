<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics=config('comics');
        foreach ($comics as $singlecomic) {
            $newcomic = new Comic();        
            $newcomic->title = $singlecomic['title'];
            $newcomic->description = $singlecomic['description'];
            $newcomic->thumb = $singlecomic['thumb'];
            $newcomic->price = $singlecomic['price'];
            $newcomic->sale_date = $singlecomic['sale_date'];
            $newcomic->type = $singlecomic['type'];
            $newcomic->save();
        }
    }
}
