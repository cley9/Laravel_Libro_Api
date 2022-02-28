<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    // use HasFactory;
    protected $table="cliente";
    protected $primarykey="id";
    protected $fillable=['nombre','edad'];
// para que no permita esos campos
    public $timestamps=false;
}
