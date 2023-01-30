<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table='pages';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable=[
        'tittle',
        'description',
        'image',
        'status'
    ];
}
