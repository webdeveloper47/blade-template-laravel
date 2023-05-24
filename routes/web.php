<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Storage;





Route::get('/', [HomeController::class, 'page']);
