<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    public function index()
    {   
            $posts = VisiMisi::orderBy('id', 'asc')->paginate(5); 
            return view('pages.table_visimisi', compact('posts'),['posts' => $posts]); 
            with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
    * create
    *
    * @return void
    */
    public function create()
    {   
        return view('pages.create_visimisi');
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
        'visi'         => 'required',
        'misi'         => 'required',
    ]);

    $visi = VisiMisi::create([
        'visi'          => $request->visi,
        'misi'          => $request->misi,
    ]);

    if($visi){
        //redirect dengan pesan sukses
        return redirect()->route('table-visi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('table-visi.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        'visi'         => 'required',
        'misi'         => 'required',
    ]);

        $visi = VisiMisi::find($id);

        $visi->visi          = $request->visi;
        $visi->misi          = $request->misi;
        $visi->save();

    if($visi){
        //redirect dengan pesan sukses
        return redirect()->route('table-visi.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('table-visi.index')->with(['error' => 'Data Gagal Diupdate!']);
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
  $visi = VisiMisi::findOrFail($id);
  $visi->delete();

  if($visi){
     //redirect dengan pesan sukses
     return redirect()->route('table-visi.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }else{
    //redirect dengan pesan error
    return redirect()->route('table-visi.index')->with(['error' => 'Data Gagal Dihapus!']);
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
        $visi = VisiMisi::find($id);

        return view('pages.edit_visimisi', ['visi' => $visi]);
    }
}
