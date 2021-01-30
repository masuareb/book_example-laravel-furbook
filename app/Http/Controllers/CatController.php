<?php

namespace Furbook\Http\Controllers;

use Illuminate\Http\Request;

use Furbook\Http\Requests;

use Furbook\Cat;

class CatController extends Controller
{
    //
    public function index() {
        $cats = Cat::all();
        return view('cats.index')->with('cats', $cats);
    }

}
