<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\File;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {   
            $posts = Slider::orderBy('id', 'asc')->paginate(5); 
            return view('pages.table_slider', compact('posts'),['posts' => $posts]); 
            with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
    * create
    *
    * @return void
    */
    public function create()
    {   
        return view('pages.create_slider');
    }

    public function store(Request $request)
{
    $request->validate([ 
        'slider' => 'required',
    ]);
        
        $image = $request->file('slider');
        if ($image) {
        $image_name = $request->file('slider')->store('images', 'public');
        }

        $slider = new Slider();
        $slider->slider = $image_name;
        $slider->save();

        return redirect()->route('table-slider.index') ->with('Success', 'Slider Berhasil Ditambahkan');
}

/**
* edit
*
* @param  mixed $datapegawai
* @return void
*/
public function edit($id)
{
    $slider = Slider::find($id);
    return view('pages.edit_slider', compact('slider'));
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
            'slider' => 'required',
        ]);

            //Mahasiswa::find($Nim)->update($request->all());

            $slider = Slider::find($id);
            if ($slider->slider && file_exists(storage_path('app/public/' . $slider->slider))) {
                Storage::delete('public/' . $slider->slider);
            }
            $image_name = $request->file('slider')->store('images', 'public');
            $slider->slider = $image_name;
            $slider->save();

            return redirect()->route('table-slider.index') ->with('Success', 'Slider Berhasil Diupdate');
    }

/**
* destroy
*
* @param  mixed $id
* @return void
*/
public function destroy($id)
{
  $slider = Slider::findOrFail($id);
  Storage::disk('local')->delete('app/public/'.$slider->slider);
  $slider->delete();

  if($slider){
     //redirect dengan pesan sukses
     return redirect()->route('table-slider.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }else{
    //redirect dengan pesan error
    return redirect()->route('table-slider.index')->with(['error' => 'Data Gagal Dihapus!']);
  }
}
}
