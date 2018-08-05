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
            'password' => md5($req->password),
            'mobile_number' => $req->mobile_number,
            'status_jual' => "0"
        ]);

        Session::put('customer_name',$req->customer_name);
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
               Session::put('customer_name',$result->customer_name);
               Session::put('customer_email',$result->customer_email);
               Session::put('mobile_number',$result->mobile_number);
               Session::put('status',$result->status_jual);
               Session::put('customer_id',$result->customer_id);
               return redirect('/customer');
             }else{
                
                return redirect('/login-check');
             }
             
    }

    public function customer_logout()
    {
      Session::flush();
      return redirect('/'); 
    }
  
    public function Customer()
    {
     
        return view('pages.Customer');
    }

    public function daftarPenjual()
    {
      return view('customer.daftar_penjual');
    }

    public function postPenjual(Request $request)
    {
      $u_customer = DB::table('tbl_customer')
                ->where('customer_id', $request->customer_id)->update(['status_jual' => 1]);
      if ($u_customer) {
        $jadi_penjual = DB::table('tbl_penjuals')->insert([
          'customer_id' => $request->customer_id,
          'nama_toko' => $request->nama_toko,
          'description_toko' => $request->description_toko
        ]);
      }
      return redirect('/customer');
    }
}