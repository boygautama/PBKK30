<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
     protected $table = 'tb_kelas';
     protected $primaryKey = "id";
     protected $fillable = [
     'nana_kelas'
     ];
     public $timestamps = true;

}
