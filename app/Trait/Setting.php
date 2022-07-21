<?php

namespace App\Trait;

use App\Models\Setting as ModelsSetting;

trait Setting {
    private function getAllSettings()
    {
        $settings = [];
        ModelsSetting::all()->each(function($setting) use (&$settings) {
            $settings[$setting['title']] = $setting['content'];
        });

        return $settings;
    }
}