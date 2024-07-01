<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name_event', 'price', 'quantity', 'sale_start', 'sale_end', 'barcode','time', 'location',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}

