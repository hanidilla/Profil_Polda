<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataPegawai;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'table_jabatan';

    public function pegawai(){
        return $this->hasMany(DataPegawai::class);
    }
}
