<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPegawai;
use App\Models\Jabatan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\File;

class DataPegawaiController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //$mahasiswas = Mahasiswa::all()
        $pegawai = DataPegawai::with('jabatan')->get();
        $posts = DataPegawai::orderBy('id', 'asc')->paginate(5);
        return view('pages.table_pegawai', compact('pegawai', 'posts'),['pegawai' => $pegawai,'posts' => $posts]); 
        with('i', (request()->input('page', 1) - 1) * 5);
    }

/**
* create
*
* @return void
*/
public function create()
{
    $jabatan = Jabatan::all();
    return view('pages.create_pegawai', ['jabatan' => $jabatan]);
}


/**
* store
*
* @param  mixed $request
* @return void
*/
public function store(Request $request)
{
    $request->validate([ 
        'nama' => 'required',
        'foto' => 'required',
    ]);
        
        $image = $request->file('foto');
        if ($image) {
        $image_name = $request->file('foto')->store('images', 'public');
        }

        //Mahasiswa::create($request->all());
        $jabatan = Jabatan::find($request->get('jabatan'));

        $pegawai = new DataPegawai();
        $pegawai->nama = $request->get('nama');
        $pegawai->foto = $image_name;
        $pegawai->jabatan()->associate($jabatan);
        $pegawai->save();

        return redirect()->route('table-pegawai.index') ->with('Success', 'Pegawai Berhasil Ditambahkan');
}

/**
* edit
*
* @param  mixed $datapegawai
* @return void
*/
public function edit($id)
{
    $pegawai = DataPegawai::with('jabatan')->where('id', $id)->first();
    $jabatan = Jabatan::all();
    return view('pages.edit_pegawai', compact('pegawai', 'jabatan'));
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
            'nama' => 'required',
        ]);

            //Mahasiswa::find($Nim)->update($request->all());

            $pegawai = DataPegawai::with('jabatan')->where('id', $id)->first();
            $jabatan = Jabatan::find($request->get('jabatan'));
            $pegawai->nama = $request->get('nama');
            if ($pegawai->foto && file_exists(storage_path('app/public/' . $pegawai->foto))) {
                Storage::delete('public/' . $pegawai->foto);
            }
            $image_name = $request->file('foto')->store('images', 'public');
            $pegawai->foto = $image_name;
            // $pegawai->jabatan()->associate($id);
            $pegawai->save();

            return redirect()->route('table-pegawai.index') ->with('Success', 'Pegawai Berhasil Diupdate');
    }

/**
* destroy
*
* @param  mixed $id
* @return void
*/
public function destroy($id)
{
  $pegawai = DataPegawai::findOrFail($id);
  Storage::disk('local')->delete('app/public/'.$pegawai->foto);
  $pegawai->delete();

  if($pegawai){
     //redirect dengan pesan sukses
     return redirect()->route('table-pegawai.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }else{
    //redirect dengan pesan error
    return redirect()->route('table-pegawai.index')->with(['error' => 'Data Gagal Dihapus!']);
  }
}

public function show($id)
    {
        //$List = Mahasiswa::find($Nim);
        $pegawai = DataPegawai::with('jabatan')->where('id', $id)->first();
        return view('pages.show_pegawai', compact('pegawai'), ['pegawai' => $pegawai]);
    }


    
}
