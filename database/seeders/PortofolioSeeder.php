<?php

namespace Database\Seeders;

use App\Models\Portofolio;
use Illuminate\Database\Seeder;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portofolio::create([
            'foto_portofolio' => 'post-images/j49PWAUU3K2sb9qn19ZL1N5uyyWKtjXnXwb4DnV8.jpg',
            'title_portofolio' => 'Web Dev',
            'name' => 'Kingkin',
            'tanggal' => '2021-12-09'
        ]);
    }
}
