<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }

    public function index(Request $request) {

        $autos = $request->user()->autos()->get();
        return view('autos.index', ['autos' => $autos]);
    }

    public function store(){


    }

    public function editView(){


    }

    public function edit(){

    }

    public function destroy(){


    }
}
