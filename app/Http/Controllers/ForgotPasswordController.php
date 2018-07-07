<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    public function forgotPassword() {
        return view('auth.password');
    }

    //defining which password broker to use, in our case its the admins
    protected function broker() {
        return Password::broker('admins');
    }
}
