<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', config('app.frontend_url'));

// インポートしておく (TODO: どうして、ここでやらないといけないの？)
require __DIR__.'/auth.php';
