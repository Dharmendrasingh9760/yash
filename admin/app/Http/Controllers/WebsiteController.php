<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function websetting(){
        return view('web_setting.index');
    }
}
