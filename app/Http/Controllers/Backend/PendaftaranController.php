<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Pendaftaran;

class PendaftaranController extends Controller
{
    public function daftar() {
	   $data['data'] = Pendaftaran::whereNull('file_proposal')->where('status','Daftar')->orderBy('id', 'DESC')->get();

      return view('backend.pages.pendaftaran.daftar', $data);
    }
    
    public function tahap_seleksi() {
        $data['data'] = Pendaftaran::where('status','Tahap Seleksi')->orderBy('id', 'DESC')->get();
 
       return view('backend.pages.pendaftaran.tahap_seleksi', $data);
     }

     public function lolos() {
        $data['data'] = Pendaftaran::where('status','Lolos')->orderBy('id', 'DESC')->get();
 
       return view('backend.pages.pendaftaran.lolos', $data);
     }

     public function tidak_lolos() {
        $data['data'] = Pendaftaran::where('status','Tidak Lolos')->orderBy('id', 'DESC')->get();
 
       return view('backend.pages.pendaftaran.tidak_lolos', $data);
     }

    public function show($id)
    {
      
    }

    public function edit($id)
    {
      $data['data'] = Pendaftaran::find($id);

      return view('backend.pages.pendaftaran.edit', $data);
    }

    public function update($id, Request $request)
    {
        $req = $request->except('_method','_token','submit');
        $req['tgl_lahir'] = date('Y-m-d', strtotime($req['tgl_lahir']));

        $result1 = User::where('id', $req['users_id'])->update(array(
          'asal_pt' => $req['asal_pt'],
          'nama_tim' => $req['nama_tim'],
          'fullname' => $req['fullname'],
          'jurusan' => $req['jurusan'],
          'email' => $req['email'],
          'alamat' => $req['alamat'],
          'tempat_lahir' => $req['tempat_lahir'],
          'tgl_lahir' => $req['tgl_lahir'],
          'jenis_kelamin' => $req['jenis_kelamin'],
          'no_telp' => $req['no_telp'],
        ));

        $req2 = $request->except('_method','asal_pt','nama_tim','fullname','jurusan','email','alamat','tempat_lahir','tgl_lahir','jenis_kelamin','no_telp','_token','submit');

        $result2 = Pendaftaran::where('id', $id)->update($req2);

        return redirect()->back()->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = Pendaftaran::find($id);
      $result->delete();

      return redirect()->back()->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
