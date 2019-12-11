<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index() {
        $data = $this->getDataRss(env("URL_RSS"));
        return view('welcome', $data);
    }
}
