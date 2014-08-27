<?php namespace App\Controllers\Website;

use View;
use App\Controllers\BaseController;


class IndexController extends BaseController {
    
    public function getIndex()
    {
        return View::make('website.index.index');
    }
}