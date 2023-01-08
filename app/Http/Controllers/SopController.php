<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sop;
use Illuminate\Support\Facades\Auth;

class SopController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * index
     *
     * @return void
     */
    public function index()
    {   
            // $sops = Sop::all();
            $posts = Sop::orderBy('id', 'asc')->paginate(5); 
            return view('pages.table_sop', compact('posts'),['posts' => $posts]); 
            with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
    * create
    *
    * @return void
    */
    public function create()
    {   
        return view('pages.create_sop');
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
        'nama_sop'     => 'required',
        'sop'    => 'required'
    ]);

    $sop = Sop::create([
        'nama_sop'  => $request->nama_sop,
        'sop'       => $request->sop,
    ]);

    if($sop){
        //redirect dengan pesan sukses
        return redirect()->route('table-sop.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('table-sop.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        'nama_sop'  => 'required',
        'sop'       => 'required',
    ]);

        $sop = Sop::find($id);

        $sop->nama_sop = $request->nama_sop;
        $sop->sop = $request->sop;
        $sop->save();

    if($sop){
        //redirect dengan pesan sukses
        return redirect()->route('table-sop.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('table-sop.index')->with(['error' => 'Data Gagal Diupdate!']);
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
  $sop = Sop::findOrFail($id);
  $sop->delete();

  if($sop){
     //redirect dengan pesan sukses
     return redirect()->route('table-sop.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }else{
    //redirect dengan pesan error
    return redirect()->route('table-sop.index')->with(['error' => 'Data Gagal Dihapus!']);
  }
}
/**
* show
*
* @param  mixed $id
* @return void
*/
public function show($id)
    {
        $sop = Sop::find($id);
        // $list = Mahasiswa::with('kelas')->where('Nim', $Nim)->first();
        return view('pages.edit_sop', compact('sop'), ['sop' => $sop]);
    }
/**
* edit
*
* @param  mixed $id
* @return void
*/
public function edit($id)
    {   
        $sop = Sop::find($id);

        return view('pages.edit_sop', ['sop' => $sop]);
    }

}


