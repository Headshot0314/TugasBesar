<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ps2 extends Model
{
    protected $fillable = ['id', 'name', 'kategori', 'tahun', 'image'];
}
