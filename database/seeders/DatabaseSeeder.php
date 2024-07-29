<?php
namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 250 ; $i++) {
            $newPost = new Post();
            $newPost -> title =$faker ->realText(40);
            $newPost -> author =$faker ->name(40);
            $newPost -> content =$faker ->realText(600);
            $newPost -> date =$faker ->dateTimeThisMonth();
            $newPost -> image =$faker ->imageUrl(400,250, 'posts');
            $newPost -> save();
        }
    }
}