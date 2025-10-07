<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function showShopPage(){
        return view('frontend.pages.shop');
    }
}
