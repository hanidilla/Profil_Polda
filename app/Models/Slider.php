<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'table_slider';
    public $timestamps = 'false';

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'slider',
    ];
}
