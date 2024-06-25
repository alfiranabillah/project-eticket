<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Events extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'desc', 'location','start_date',
        'end_date', 'poster', 'status',

    ];

    protected $hidden = [

    ];



}
