<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends CommonController
{
    public function root()
    {
        return view('pages.root');
    }
}
