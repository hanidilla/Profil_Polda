<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jabatan;

class DataPegawai extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'table_pegawai';
    public $timestamps = 'false';

    /** * The attributes that are mass assignable.
    * 
    * @var array 
    */ 
    protected $fillable = [ 'nama',];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class, 'jabatan_id', 'id');
    }

    
}
