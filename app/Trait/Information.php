<?php

namespace App\Trait;

use App\Models\Information as ModelsInformation;

trait Information {
    private function getAllInformations()
    {
        $informations = [];
        ModelsInformation::all()->each(function($info) use (&$informations) {
            $informations[$info['title']] = $info['content'];
        });

        return $informations;
    }
}