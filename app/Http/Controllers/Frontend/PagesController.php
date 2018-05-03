<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
      return view('frontend.pages.dashboard');
    }

    public function viewLogin(){
      return view('frontend.pages.login');

    }

    public function viewRegister(){
      return view('frontend.pages.register');
    }

    public function forgot(){
      return view('frontend.pages.forgot');
    }
}
