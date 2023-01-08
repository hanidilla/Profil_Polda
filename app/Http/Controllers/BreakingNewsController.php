<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BreakingNews;
use Illuminate\Support\Facades\Storage;

class BreakingNewsController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {   
            $posts = BreakingNews::orderBy('id', 'asc')->paginate(5); 
            return view('pages.table_news', compact('posts'),['posts' => $posts]); 
            with('i', (request()->input('page', 1) - 1) * 5);
    }

/**
* create
*
* @return void
*/
public function create()
{
    return view('pages.create_news');
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
        'judul' => 'required',
        'deskripsi' => 'required',
        'link' => 'required',
    ]);
        
        $image = $request->file('gambar');
        if ($image) {
        $images_name = $request->file('gambar')->store('news', 'public');
        }

        $news = new BreakingNews();
        $news->judul = $request->judul;
        $news->deskripsi = $request->deskripsi;
        $news->link = $request->link;
        $news->gambar = $images_name;
        $news->save();

        return redirect()->route('table-news.index') ->with('Success', 'Kabar Berhasil Ditambahkan');
}

/**
* edit
*
* @param  mixed $datapegawai
* @return void
*/
public function edit($id)
{
    $news = BreakingNews::find($id);
    return view('pages.edit_news', ['news' => $news]);
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
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
        ]);

            $news = BreakingNews::find($id);
            $news->judul = $request->judul;
            $news->deskripsi = $request->deskripsi;
            $news->link = $request->link;
            if ($news->gambar && file_exists(storage_path('app/public/' . $news->gambar))) {
                Storage::delete('public/' . $news->gambar);
            }
            $images_name = $request->file('gambar')->store('news', 'public');
            $news->gambar = $images_name;
            $news->save();

            return redirect()->route('table-news.index') ->with('Success', 'Kabar Berhasil Diupdate');
    }

/**
* destroy
*
* @param  mixed $id
* @return void
*/
public function destroy($id)
{
  $news = BreakingNews::findOrFail($id);
  Storage::disk('local')->delete('app/public/'.$news->gambar);
  $news->delete();

  if($news){
     //redirect dengan pesan sukses
     return redirect()->route('table-news.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }else{
    //redirect dengan pesan error
    return redirect()->route('table-news.index')->with(['error' => 'Data Gagal Dihapus!']);
  }
}

}
