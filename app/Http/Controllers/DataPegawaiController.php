<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPegawai;
use Illuminate\Support\Facades\Storage;

class DataPegawaiController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $datapegawais = DataPegawai::latest()->paginate(10);
        return view('pages.table_pegawai', compact('datapegawais'));
    }

/**
* create
*
* @return void
*/
public function create()
{
    return view('datapegawai.create');
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
        'NRP'     => 'required',
        'Nama'    => 'required',
        'Pangkat' => 'required',
        'Jabatan' => 'required',
        'image'   => 'required|image|mimes:png,jpg,jpeg'
    ]);

    //upload image
    $image = $request->file('image');
    $image->storeAs('public/datapegawais', $image->hashName());

    $datapegawai = DataPegawai::create([
        'NRP'     => $request->NRP,
        'Nama'    => $request->nama,
        'Pangkat' => $request->pangkat,
        'Jabatan' => $request->jabatan,
        'image'   => $image->hashName()
    ]);

    if($datapegawai){
        //redirect dengan pesan sukses
        return redirect()->route('pages.table_pegawai')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('pages.table_pegawai')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

/**
* edit
*
* @param  mixed $datapegawai
* @return void
*/
public function edit(DataPegawai $datapegawai)
{
    return view('DataPegawai.edit', compact('datapegawai'));
}


/**
* update
*
* @param  mixed $request
* @param  mixed $datapegawai
* @return void
*/
public function update(Request $request, DataPegawai $datapegawai)
{
    $this->validate($request, [
        'NRP'       => 'required',
        'Pangkat'   => 'required',
        'Jabatan'   => 'required'
    ]);

    //get data Blog by ID
    $datapegawai = DataPegawai::findOrFail($datapegawai->id);

    if($request->file('image') == "") {

        $datapegawai->update([
            'NRP'     => $request->NRP,
            'Pangkat' => $request->pangkat,
            'Jabatan' => $request->jabatan
        ]);

    } else {

        //hapus old image
        Storage::disk('local')->delete('public/datapegawais/'.$datapegawai->image);

        //upload new image
        $image = $request->file('image');
        $image->storeAs('public/datapegawais', $image->hashName());

        $blog->update([
            'image'   => $image->hashName(),
            'NRP'     => $request->NRP,
            'Pangkat' => $request->pangkat,
            'Jabatan' => $request->jabatan
        ]);

    }

    if($datapegawai){
        //redirect dengan pesan sukses
        return redirect()->route('DataPegawai.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('DataPegawai.index')->with(['error' => 'Data Gagal Diupdate!']);
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
  $datapegawai = DataPegawai::findOrFail($id);
  Storage::disk('local')->delete('public/datapegawais/'.$datapegawai->image);
  $datapegawai->delete();

  if($datapegawai){
     //redirect dengan pesan sukses
     return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }else{
    //redirect dengan pesan error
    return redirect()->route('blog.index')->with(['error' => 'Data Gagal Dihapus!']);
  }
}
}
