<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=[
            [
            'title'=>'post 1',
            'comment'=>'hello this is my first comment',
            'min_to_read'=>2,
            'is_published'=>true
            ],

            [
            'title'=>'post 2',
            'comment'=>'hello this is my second comment',
            'min_to_read'=>5,
            'image_path'=>'empty',
            'is_published'=>true
            ],
            [
                'title'=>'post 3',
                'comment'=>'hello this is my third comment',
                'min_to_read'=>3,
                'is_published'=>true
                ]
        ];

        foreach($posts as $key=>$value){
            Post::create($value); //calling the Post model
        }

    }
}
