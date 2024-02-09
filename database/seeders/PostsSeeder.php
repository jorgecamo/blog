<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;
use App\Models\Usuario;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = Usuario::get();
        for ($i=0; $i < 3; $i++) { 
            foreach ($users as $valor ) {
                $faker = Faker::create();
                $post= new Post();
                $post->id_usuario =$valor->id;
                $post->titulo = $faker->sentence;
                $post->contenido = $faker->text;
                $post->save();
            }
        }

       
    }
}
