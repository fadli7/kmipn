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

    public function viewProfile(){
      return view('frontend.pages.profile.dashboard');
    }

    public function viewInfoTim(){
      return view('frontend.pages.profile.info');
    }

    public function viewAddAnggota(){
      return view('frontend.pages.profile.add_anggota');
    }

    public function viewFaq(){
      return view('frontend.pages.faq');
    }

    public function viewJadwal(){
      return view('frontend.pages.jadwal');
    }
}
