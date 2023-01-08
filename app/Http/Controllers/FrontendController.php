<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPegawai;
use App\Models\BreakingNews;
use App\Models\Jabatan;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\Profil;
use App\Models\VisiMisi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {   
        $pegawai = DataPegawai::all();
        $jabatan = Jabatan::all();
        return view('welcome', [
            'pegawai' => $pegawai,
            'jabatan' => $jabatan,
        ]);
    }

    public function show(){

        $kapolda = DataPegawai::with('jabatan')->where('jabatan_id',1)->first();
        $wakapolda = DataPegawai::with('jabatan')->where('jabatan_id',2)->first();
        $umum = DataPegawai::with('jabatan')->whereIn('jabatan_id',[3,4,5,6,7,8,9,10,11,12,13,14])->get();
        $pengawas = DataPegawai::with('jabatan')->whereIn('jabatan_id',[15,16,17,18,19,20,21,22,23,24,25,26])->get();
        $pokok = DataPegawai::with('jabatan')->whereIn('jabatan_id',[27,28,29,30])->get();
        
        $news = BreakingNews::all();
        $logo = Logo::where('id', 2)->first();
        $slider = Slider::all();
        $profil = Profil::where('id', 1)->first();
        $visi = VisiMisi::where('id', 1)->first();
        return view('welcome', compact('kapolda','wakapolda','umum','pengawas','pokok', 'news', 'logo', 'slider', 'profil', 'visi',));
    }

}
