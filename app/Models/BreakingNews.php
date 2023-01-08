<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakingNews extends Model
{
    use HasFactory;

    protected $table = 'table_breaking_news';
    public $timestamps = 'false';

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'judul', 'deskripsi', 'link', 'gambar',
    ];
}
