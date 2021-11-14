<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showETS() {

        return view('ets') ;
    }
    function showGreetings() {

        return view('showgreetings') ;
    }
    function sayHi(Request $request) {

        return view('tugas') ;
    }

    function showtugasPHP() {

        return view('formku') ;
    }
    function isian(Request $request) {

        return view('piramid') ;
    }

}
