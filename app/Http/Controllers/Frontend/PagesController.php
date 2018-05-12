<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Tim;

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
      $data['tim'] = Tim::where('users_id',\Auth::user()->id)->first();
      $data['anggota'] = User::where('tim_id',$data['tim']->id)->get();
      return view('frontend.pages.profile.dashboard',$data);
    }

    public function viewInfoTim(){
      $data['tim'] = Tim::where('users_id',\Auth::user()->id)->first();
      return view('frontend.pages.profile.info',$data);
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

    public function edit_anggota($id){
      $data['data'] = User::where('id',$id)->first();
      return view('frontend.pages.profile.edit_anggota',$data);
    }

    public function submit_edit_anggota($id, Request $request)
    {
      	$req = $request->except('_method', '_token', 'submit');
        
        if (!empty($req['password'])) {
          $req['password'] = \Hash::make($req['password']);
        }else {
          unset($req['password']);
        }

        $result = User::where('id', $id)->update($req);

        return redirect('/profile/dashboard/#anggota')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function submit_add_anggota(Request $request)
    {
          $req = $request->all();
          $data['tim'] = Tim::where('users_id',\Auth::user()->id)->first();

          if($data['tim']->total_anggota == '0'){
            return redirect('/profile/dashboard/#anggota')->withInput()->with('message', array(
              'title' => 'Oops!',
              'type' => 'danger',
              'msg' => 'Failed.',
            ));
          }else{
            $req['tim_id'] = $data['tim']->id;
            Tim::where('users_id',\Auth::user()->id)->update(array(
              'total_anggota' => $data['tim']->total_anggota - 1
            ));
            $result = User::create($req);

            return redirect('/profile/dashboard/#anggota')->withInput()->with('message', array(
              'title' => 'Yay!',
              'type' => 'success',
              'msg' => 'Saved Success.',
            ));
          }
    }

    public function submit_delete_anggota($id)
    {
      $result = User::find($id);
      $tim1 = Tim::where('users_id',\Auth::user()->id)->first();
      $tim2 = Tim::where('users_id',\Auth::user()->id)->update(array(
        'total_anggota' => $tim1->total_anggota + 1
      ));
      if($result->role == 'Ketua'){
        return redirect('/profile/dashboard/#anggota')->withInput()->with('message', array(
          'title' => 'Oops!',
          'type' => 'danger',
          'msg' => 'Tidak bisa menghapus ketua',
        ));
      }else{
        $result->delete();

        return redirect('/profile/dashboard/#anggota')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Deleted data.',
        ));
      }
    }
}
