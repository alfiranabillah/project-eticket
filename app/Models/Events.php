<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Events extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_event';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
       'id_event', 'name', 'location', 'status', 'start_date', 'end_date', 'poster', 'description', 'price', 
    ];
    protected $hidden = [

    ];



}
