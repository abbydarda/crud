<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = "todo";
    protected $fillable = ['jam','nama_kegiatan'];
}
