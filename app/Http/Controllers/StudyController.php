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
        return redirect('/study');
    }

    public function update(Request $request)
    {
        $sel_id = ['id' => $request->id];
        $item = DB::select('select * from studies where id = :id', $sel_id);
        return view('study.update', ['form' => $item[0]]);
    }

    public function edit(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'date' => $request->date,
            'hour' => $request->hour,
            'minute' => $request->minute,
            'comment' => $request->comment,
        ];

        DB::update('update studies set name = :name, date = :date, hour = :hour, minute = :minute, comment = :comment where id = :id', $param);
        return redirect('/study');
    }

    public function delete(Request $request)
    {
        $sel_id = ['id' => $request->id];
        $item = DB::select('select * from studies where id = :id', $sel_id);
        return view('study.del', ['sel_row' => $item[0]]);
    }

    public function remove(Request $request)
    {
        $sel_id = ['id' => $request->id];
        DB::delete('delete from studies where id = :id', $sel_id);
        return redirect('/study');
    }
}
