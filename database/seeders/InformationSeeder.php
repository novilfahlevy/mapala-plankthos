<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information::create(['title' => 'angkatan', 'content' => '0']);
        Information::create(['title' => 'anggota', 'content' => '0']);

        Information::create(['title' => 'visi', 'content' => '']);
        Information::create(['title' => 'misi', 'content' => '']);

        Information::create(['title' => 'twitter', 'content' => '']);
        Information::create(['title' => 'instagram', 'content' => '']);
        Information::create(['title' => 'facebook', 'content' => '']);
        Information::create(['title' => 'youtube', 'content' => '']);

        Information::create(['title' => 'whatsapp', 'content' => '']);
        Information::create(['title' => 'email', 'content' => '']);
        Information::create(['title' => 'location', 'content' => '']);
    }
}
