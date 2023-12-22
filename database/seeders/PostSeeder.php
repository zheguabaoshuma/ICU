<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //switch database
        DB::statement('USE postDB');
        //create post
        $post = DB::table('posts')->insert([
            'id' => '1',
            'title' => 'test',
            'is_published' => true,
            'published_at' => now(),
            'content' => 'Lorem ipsum dolor sit amet',
        ]);
        //output the contents of the postDB
        $this->command->info('Post table seeded! ID: {$post->id}');

//        //delete all the posts
//        DB::table('posts')->truncate();
//        $this->command->info('Post table truncated!');

        //switch back
        DB::statement('USE userDB');
    }
}
