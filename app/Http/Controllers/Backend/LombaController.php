<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lomba;
use Image;
use File;
use Illuminate\Support\Facades\Storage;

class LombaController extends Controller
{
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
        
        if ($request->hasFile('image')) {
          if ($request->file('image')->isValid()) {
              $destinationPath = 'logo/'; // upload path
              $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
              $fileName = rand(11111,99999).'.'.$extension; // renaming image
              $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
              Image::make($destinationPath.$fileName)->resize(500, null, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
              })->save($destinationPath.$fileName);
              $req['photo'] = $fileName;
              unset($req['image']);
          }
        }

        $result = Lomba::create($req);

        return redirect('backend/lomba')->withInput()->with('message', array(
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
        $req = $request->except('_method', '_token', 'submit');
        
        if ($request->hasFile('image')) {
          if ($request->file('image')->isValid()) {
            $destinationPath = 'logo/'; // upload path
            $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
            Image::make($destinationPath.$fileName)->resize(500, null, function($constraint) {
              $constraint->aspectRatio();
              $constraint->upsize();
            })->save($destinationPath.$fileName);
            $req['photo'] = $fileName;
            unset($req['image']);
  
            $result = Lomba::find($id);
            if (!empty($result->photo)) {
              File::delete('logo/'.$result->photo);
            }
          }else {
            unset($req['photo']);
          }
        }else {
          unset($req['photo']);
        }

        $result = User::where('id', $id)->update($req);

        return redirect('backend/lomba')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = Lomba::find($id);
      $result->delete();

      return redirect('backend/lomba')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
