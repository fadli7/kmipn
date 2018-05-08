<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tim;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['ck'] = Tim::whereHas('lomba', function ($query) {
        $query->where('kategori', '=', 'Cipta Inovasi');
      })->count();
      $data['tik'] = Tim::whereHas('lomba', function ($query) {
        $query->where('kategori','Bisnis TIK');
      })->count();
      $data['game'] = Tim::whereHas('lomba', function ($query) {
        $query->where('kategori','Game Development');
      })->count();
      $data['gov'] = Tim::whereHas('lomba', function ($query) {
        $query->where('kategori','E-Goverment');
      })->count();
      $data['iot'] = Tim::whereHas('lomba', function ($query) {
        $query->where('kategori','IoT');
      })->count();
      $data['animasi'] = Tim::whereHas('lomba', function ($query) {
        $query->where('kategori','Desain Animasi');
      })->count();
      $data['jaringan'] = Tim::whereHas('lomba', function ($query) {
        $query->where('kategori','Keamanan Jaringan');
      })->count();
      $data['hack'] = Tim::whereHas('lomba', function ($query) {
        $query->where('kategori','Hackathon');
      })->count();
      return view('backend.pages.dashboard.index',$data);
    }
}