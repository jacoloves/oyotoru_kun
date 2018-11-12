<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

class StudyController extends Controller
{
    public function index(Request $request)
    {
        $items = Study::all();
        return view('study.index', ['items' => $item]);
    }
}
