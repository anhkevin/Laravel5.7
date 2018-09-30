<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        $data = [];

        // get customer
        $customers = DB::table('customer')->get();
        //die(var_dump($customers));
        return view('DEMO.index',$data);
    }
}
