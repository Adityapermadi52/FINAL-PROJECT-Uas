<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapegawai extends Model
{
     use HasFactory;
        // protected $table='datapegawais';
        //  protected $primaryKey = ' id ';

    protected $fillable=[
        'user_id',"nip","nama",'jabatan','gambar'
    ];
}
