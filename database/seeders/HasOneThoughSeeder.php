<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class HasOneThoughSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // $country = new Country();
        // $country->name = "Thailand";
        // $country->save();

        $user = new User();
        $user->name = "Kyaw Kyaw";
        $user->email = "kyawkyaw@gmail.com";
        $user->password = Hash::make('password');
        $user->country_id = 1;
        $user->save();

        $post = new Post();
        $post->title = "kyaw kyaw title";
        $post->content = "mg kyaw kyaw content";
        $post->user_id = 1;
        $post->save();

        $post = new Post();
        $post->title = "kyaw kyaw title 2";
        $post->content = "mg kyaw kyaw content 2";
        $post->user_id = 1;
        $post->save();


    }
}
