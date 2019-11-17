<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CRUDBooster;

class FrontController extends Controller
{
    public function get_index(){
        $data['kabupaten']=CRUDBooster::get('kabupaten','status_kab = "active" ');
       // dd($data['kabupaten']);
        return view('layout',$data);
    }
}
