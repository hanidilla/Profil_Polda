<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    protected $table = 'table_logo';
    public $timestamps = 'false';

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'logo',
    ];
}
