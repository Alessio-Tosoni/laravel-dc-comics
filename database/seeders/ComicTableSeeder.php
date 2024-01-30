<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_comics = config("comics");

        foreach($array_comics as $comics_item){
            $nuovo_comic = new Comic();
            $nuovo_comic->title = $comics_item["title"];
            $nuovo_comic->price = $comics_item["price"];
            $nuovo_comic->cover = $comics_item["thumb"];
            $nuovo_comic->save();
        }
    }
}
