<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(['title' => 'angkatan', 'content' => '0']);
        Setting::create(['title' => 'anggota', 'content' => '0']);

        Setting::create(['title' => 'visi', 'content' => '']);
        Setting::create(['title' => 'misi', 'content' => '']);

        Setting::create(['title' => 'twitter', 'content' => '']);
        Setting::create(['title' => 'instagram', 'content' => '']);
        Setting::create(['title' => 'facebook', 'content' => '']);
        Setting::create(['title' => 'youtube', 'content' => '']);

        Setting::create(['title' => 'whatsapp', 'content' => '']);
        Setting::create(['title' => 'email', 'content' => '']);
        Setting::create(['title' => 'location', 'content' => '']);
    }
}
