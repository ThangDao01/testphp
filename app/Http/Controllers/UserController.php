<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function create()
    {
        return view('user.create_account');
    }

    public function create_handling(Request $request)
    {
         $fullName = $request->get('fullName');
         $email = $request->get('email');
         $phone = $request ->get('phone');
         $address = $request ->get('address');
         $IdCard = $request ->get('IdCard');
         return view('user.detail_account')
             ->with('fullName',$fullName)
             ->with('email',$email)
             ->with('phone',$phone)
             ->with('address',$address)
             ->with('IdCard',$IdCard);
    }
}
