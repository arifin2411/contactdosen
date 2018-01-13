<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infodosen extends Model
{
    //

    protected $fillable = [
        'name','matakuliah','deskripsi','picture','email'
    ];

    protected $table = 'infodosens';
    protected $primaryKey = 'id';

}
