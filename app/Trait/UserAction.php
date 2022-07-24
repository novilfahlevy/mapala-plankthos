<?php

namespace App\Trait;

use App\Models\UserAction as ModelsUserAction;

trait UserAction
{
    private function logAction($action)
    {
        $log = new ModelsUserAction();
        $log->username = auth()->user()->name;
        $log->action = $action;
        return $log->save();
    }
}