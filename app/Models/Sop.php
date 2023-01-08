<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sop extends Model
{
    use HasFactory;

    protected $table = 'table_sop';
    public $timestamps = 'false';

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_sop', 'sop',
    ];
}
