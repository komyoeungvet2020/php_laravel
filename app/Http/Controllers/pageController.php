<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function action(){
        $ation = "action";
        return view('page.action',compact('action'));
    }
    
    public function showCustomer(){
      $customer = "customer";
      $customers = array('Chandaraty','Maly','Samphas','Donat');
      return view('pages.customer',compact('customers','customer'));
    }
}
