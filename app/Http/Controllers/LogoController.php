<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\File;
use Illuminate\Support\Facades\DB;
use App\Models\Logo;

class LogoController extends Controller
{
    public function index()
    {   
            $posts = Logo::orderBy('id', 'asc')->paginate(5); 
            return view('pages.table_logo', compact('posts'),['posts' => $posts]); 
            with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
    * create
    *
    * @return void
    */
    public function create()
    {   
        return view('pages.create_logo');
    }

    public function store(Request $request)
{
    $request->validate([ 
        'logo' => 'required',
    ]);
        
        $image = $request->file('logo');
        if ($image) {
        $image_name = $request->file('logo')->store('images', 'public');
        }

        $logo = new Logo();
        $logo->logo = $image_name;
        $logo->save();

        return redirect()->route('table-logo.index') ->with('Success', 'Logo Berhasil Ditambahkan');
}

/**
* edit
*
* @param  mixed $datapegawai
* @return void
*/
public function edit($id)
{
    $logo = Logo::find($id);
    return view('pages.edit_logo', compact('logo'));
}


/**
* update
*
* @param  mixed $request
* @param  mixed $datapegawai
* @return void
*/
public function update(Request $request, $id)
    {
        $request->validate([  
            'logo' => 'required',
        ]);

            //Mahasiswa::find($Nim)->update($request->all());

            $logo = Logo::find($id);
            if ($logo->logo && file_exists(storage_path('app/public/' . $logo->logo))) {
                Storage::delete('public/' . $logo->logo);
            }
            $image_name = $request->file('logo')->store('images', 'public');
            $logo->logo = $image_name;
            $logo->save();

            return redirect()->route('table-logo.index') ->with('Success', 'Logo Berhasil Diupdate');
    }

/**
* destroy
*
* @param  mixed $id
* @return void
*/
public function destroy($id)
{
  $logo = Logo::findOrFail($id);
  Storage::disk('local')->delete('app/public/'.$logo->logo);
  $logo->delete();

  if($logo){
     //redirect dengan pesan sukses
     return redirect()->route('table-logo.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }else{
    //redirect dengan pesan error
    return redirect()->route('table-logo.index')->with(['error' => 'Data Gagal Dihapus!']);
  }
}

}
