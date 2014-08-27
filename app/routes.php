<?php

$namespace = "App\Controllers\Website";
Route::group(array('namespace' => $namespace), function()
{
    Route::controller('/', 'IndexController');
});
