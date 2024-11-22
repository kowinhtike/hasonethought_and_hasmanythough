<?php

use App\Models\Country;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $country = Country::find(1);
    return $country->posts;
});
