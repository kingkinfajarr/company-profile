<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'image_blog' => 'post-images/xREv9t7gZHavcLBsYazz4bxNIMzNODcaLuHUS1Vv.jpg',
            'author' => 'Kingkin',
            'date' => '2021-12-20',
            'title' => 'Front end Dev',
            'slug' => 'front-end-dev',
            'content' => '<div><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500,s when an unknown printer took a galley of type and scrambled it to make a type&nbsp;</div>'
        ]);
    }
}
