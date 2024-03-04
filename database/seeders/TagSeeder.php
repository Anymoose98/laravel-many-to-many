<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creo un array di tags
        $names = ["Amicizia", "Viaggio", "Sopravvivenza", "Tradimento", "Vendetta", "Redenzione", "Crescita personale"];
        {
        // lo ciclo e inserisco nel database
        foreach ($names as $name) {
            $tag = new Tag();
            $tag->name = $name;
            $tag->save();
            }
        }
    }
}
