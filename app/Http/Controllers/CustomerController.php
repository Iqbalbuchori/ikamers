<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class CustomerController extends Controller
{
    //
    public function buatCustomer(Request $req)
    {
       
        $customer = DB::table('tbl_customer')->insert([
            'customer_name' => $req->customer_name,
            'customer_email' => $req->customer_email,
            'password' => bcrypt($req->password),
            'mobile_number' => $req->mobile_number,
            'status_jual' => "0"
        ]);

        Session::put('customer_name',$request->customer_name);
        return redirect('/');      

    }

    public function customer_login(Request $request)
    {
      $customer_email=$request->customer_email;
      $password=md5($request->password);
      $result=DB::table('tbl_customer')
              ->where('customer_email',$customer_email)
              ->where('password',$password)
              ->first();

             if ($result) {
               
               Session::put('customer_id',$result->customer_id);
               return redirect('/');
             }else{
                
                return redirect('/login-check');
             }
             
    }

    public function Customer()
  {
     
        return view('pages.Customer');
  }

}