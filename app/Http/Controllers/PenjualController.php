<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
class PenjualController extends Controller
{
 
    public function index()
    {
    	return view('admin_penjual');
    }

    public function dashboard(Request $request)
    {
    	$penjual_email=$request->Penjual_email;
    	$penjual_password=md5($request->penjual_password);
    	$result=DB::table('tbl_penjual')
    	        ->where('penjual_email',$penjual_email)
    	        ->where('penjual_password',$penjual_password)
    	        ->first();
    	       
    	    if ($result) {
    	           Session::put('penjual_name',$result->penjual_name);
    	           Session::put('penjual_id',$result->penjual_id);
    	           return Redirect::to('/dashboard/penjual');
    	       }else{                
                   Session::put('messege','Email or Password Invalid');
                   return Redirect::to('/penjual'); 
    	       }   
    }
}
