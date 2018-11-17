<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;
use Illuminate\Support\Facades\DB;

class StudyController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from studies order by date desc');
        return view('study.index', ['items' => $items]);
    }

    public function post(Request $request)
    {
        if (isset($request->name))
        {
            $param = $request->name;
            //$items = DB::select('select * from studies where name = :name order by date desc', $param);
            $items = DB::table('studies')->where('name', 'like', '%' . $param . '%')->get();
        } else {
            $items = DB::select('select * from studies order by date desc');
        }
        return view('study.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('study.add');
    }

    public function create(Request $request)
    {
        /*
        $this->validate($request, Study::$rules);
        $study = new Study;
        $form = $request->all();
        unset($form['_token']);
        $study->fill($form)->save();
        */
        $param = [
            'name' => $request->name,
            'date' => $request->date,
            'hour' => $request->hour,
            'minute' => $request->minute,
            'comment' => $request->comment,
        ];
        DB::insert('insert into studies (name, date, hour, minute, comment) values (:name, :date, :hour, :minute, :comment)', $param);
        return redirect('./study');
    }

    public function update(Request $request)
    {
        $sel_id = $request->id;
        $sel_item = DB::select('select * from studies where id = :id', $sel_id);
        return view('study.update', ['$sel_id' => $item[0]]);
    }
}
