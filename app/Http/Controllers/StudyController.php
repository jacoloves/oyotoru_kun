<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StudyController extends Controller
{
    //auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        /*
        if (Auth::check()){

        }
        */

        $items = DB::table('studies')->orderBy('date', 'desc')->paginate(5);
        //ペジネーションをするフラグ4
        $flg = ['flg' => 0];
        return view('study.index', ['items' => $items], $flg);
    }

    public function post(Request $request)
    {
        if (isset($request->name))
        {
            $param = $request->name;
            //$items = DB::select('select * from studies where name = :name order by date desc', $param);
            //ペジネーションをしないフラグ
            $flg = ['flg' => 1];
            $items = DB::table('studies')->where('name', 'like', '%' . $param . '%')->get();
        } else {
            //ペジネーションをするフラグ
            $flg = ['flg' => 0];
            $items = DB::table('studies')->orderBy('date', 'desc')->paginate(5);
        }
        return view('study.index', ['items' => $items], $flg);
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

    public function getAuth(Request $request)
    {
        $param = ['message' => 'ログインしてください'];
        return view('study.auth', $param);
    }

    
}
