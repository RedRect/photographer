<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class photographerController extends Controller
{
    public function index(){

        return view('photographer');
    }

    public function readJson(){

        $json = Storage::disk('local')->get('landscapes.json');
        $json = json_decode($json,true);

        return $json;
//        return ["abcd"];
    }
}
