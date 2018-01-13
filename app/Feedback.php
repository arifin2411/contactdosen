<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    protected $fillable = [
        'deskripsi'
    ];

    protected $table = 'feedbacks';
    protected $primaryKey = 'id';
}