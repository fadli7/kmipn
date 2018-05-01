<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
  public function index() {
    $data['data'] = User::where('role','admin')->orderBy('id', 'DESC')->get();

     return view('backend.pages.admin.index', $data);
  }
}
