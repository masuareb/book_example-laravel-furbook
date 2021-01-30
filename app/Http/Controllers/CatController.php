<?php

namespace Furbook\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Furbook\Http\Requests;

use Furbook\Cat;

class CatController extends Controller
{
    //
    public function index() {
        $cats = Cat::all();
        return view('cats.index')->with('cats', $cats);
    }

    public function create() {
        return view('cats.create');
    }

    public function store() {
        $cat = Cat::create(Input::all());
        return redirect('cats/'.$cat->id)
            ->withSuccess('Cat has been created.');
    }

    public function show(Cat $cat) {
        return view('cats.show')->with('cat', $cat);
    }

    public function edit(Cat $cat) {
        return view('cats.edit')->with('cat', $cat);
    }

    public function update(Cat $cat) {
        $cat->update(Input::all());
        return redirect('cats/'.$cat->id)
            ->withSuccess('Cat has been updated.');
    }

    public function destroy(Cat $cat) {
        $cat->delete();
        return redirect('cats')
            ->withSuccess('Cat has been deleted.');
    }
}
