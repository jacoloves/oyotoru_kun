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

    public function add(Request $request)
    {
        return view('study.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Study::$rules);
        $study = new Study;
        $form = $request->all();
        unset($form['_token']);
        $study->fill($form)->save();
        return redirect('/study');
    }
}
