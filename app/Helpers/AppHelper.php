<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class AppHelper {
    public static function activeMenu($name, $activeClass = 'site-header__menu-desktop-item--active'): String {
        if (Route::currentRouteName() === $name) return $activeClass;

        return "";
    }
}
