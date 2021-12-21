<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'foto_gallery' => 'post-images/zaZaQrb3KJMPM4qa2FOiE8Z7vsQ8BGeIFzPqkTyO.jpg'
        ]);
    }
}
