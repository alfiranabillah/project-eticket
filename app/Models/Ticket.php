<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ticket';
    public $incrementing = false;
    protected $keyType = 'string';
    public $order_id = false;

    protected $fillable = [
        'id_ticket', 'order_id', 'id_event', 'name_event', 'price', 'quantity', 'sale_start', 'sale_end', 'barcode','time', 'location',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}

