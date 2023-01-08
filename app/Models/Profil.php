<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    
    protected $table = 'table_profil';
    public $timestamps = 'false';

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'judul', 'judul_1', 'deskripsi', 'deskripsi_1',
    ];
}
