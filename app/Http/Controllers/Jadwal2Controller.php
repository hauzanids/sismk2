<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Jadwal2Controller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      return view('jadwal2edit.index');
    }

    public function beranda()
    {
      return view('jadwal2.index');
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('jadwal2')->get();
            echo json_encode($data);
        }
    }

    function add_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                'first_name'    =>  $request->first_name,
                'last_name'     =>  $request->last_name
            );
            $id = DB::table('jadwal2')->insert($data);
            if($id > 0)
            {
                echo '<div class="alert alert-success">Data Inserted</div>';
            }
        } 
    }

    function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name => $request->column_value
            );
            DB::table('jadwal2')
                ->where('id', $request->id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }
    }

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
            DB::table('jadwal2')
                ->where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }
}
