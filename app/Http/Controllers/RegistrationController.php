<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function home(){
        return view('student.home');
    }

    public function login(){
        return view('student.login');
    }

    public function register(){
        return view('student.register');
    }

    public function registrationConfirmation(){
        return view('student.registration-confirmation');
    }
}
