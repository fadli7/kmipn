<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lomba;

class LombaController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth:admin');
    }

  public function index() {
    $data['data'] = Lomba::orderBy('id', 'DESC')->get();

     return view('backend.pages.lomba.index', $data);
  }

  public function create()
  {
      return view('backend.pages.lomba.create');
  }

  public function store(Request $request)
  {
        $req = $request->all();

        $result = Lomba::create($req);

        return redirect('ecodeeepis/lomba')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
  }

    public function edit($id)
    {
      $data['data'] = Lomba::find($id);

      return view('backend.pages.lomba.edit', $data);
    }

    public function update($id, Request $request)
    {
        $req = $request->except('files','_method', '_token', 'submit');

        $result = Lomba::where('id', $id)->update($req);

        return redirect('ecodeeepis/lomba')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = Lomba::find($id);
      $result->delete();

      return redirect('ecodeeepis/lomba')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
