<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;

class StudyController extends Controller
{
    public function index(Request $request)
    {
        $items = Study::all();
        return view('study.index', ['items' => $items]);
    }
}
