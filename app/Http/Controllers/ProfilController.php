<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index()
    {   
            $posts = Profil::orderBy('id', 'asc')->paginate(5); 
            return view('pages.table_profil', compact('posts'),['posts' => $posts]); 
            with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
    * create
    *
    * @return void
    */
    public function create()
    {   
        return view('pages.create_profil');
    }

    /**
* store
*
* @param  mixed $request
* @return void
*/
public function store(Request $request)
{
    $this->validate($request, [
        'judul'         => 'required',
        'judul_1'       => 'required',
        'deskripsi'     => 'required',
        'deskripsi_1'   => 'required',
    ]);

    $profil = Profil::create([
        'judul'          => $request->judul,
        'judul_1'        => $request->judul_1,
        'deskripsi'      => $request->deskripsi,
        'deskripsi_1'    => $request->deskripsi_1,
    ]);

    if($profil){
        //redirect dengan pesan sukses
        return redirect()->route('table-profil.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('table-profil.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

/**
* update
*
* @param  mixed $request
* @param  mixed $sop
* @return void
*/
public function update(Request $request, $id)
{
    $this->validate($request, [
        'judul'         => 'required',
        'judul_1'       => 'required',
        'deskripsi'     => 'required',
        'deskripsi_1'   => 'required',
    ]);

        $profil = profil::find($id);

        $profil->judul       = $request->judul;
        $profil->judul_1     = $request->judul_1;
        $profil->deskripsi   = $request->deskripsi;
        $profil->deskripsi_1 = $request->deskripsi_1;
        $profil->save();

    if($profil){
        //redirect dengan pesan sukses
        return redirect()->route('table-profil.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('table-profil.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

/**
* destroy
*
* @param  mixed $id
* @return void
*/
public function destroy($id)
{
  $profil = Profil::findOrFail($id);
  $profil->delete();

  if($profil){
     //redirect dengan pesan sukses
     return redirect()->route('table-profil.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }else{
    //redirect dengan pesan error
    return redirect()->route('table-profil.index')->with(['error' => 'Data Gagal Dihapus!']);
  }
}
/**
* edit
*
* @param  mixed $id
* @return void
*/
public function edit($id)
    {   
        $profil = Profil::find($id);

        return view('pages.edit_profil', ['profil' => $profil]);
    }
}
