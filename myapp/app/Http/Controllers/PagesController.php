<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getPlantilla(){
        return view('pages.index');
    }

    public function getAbout(){
        return view('pages.about');
    }


}
