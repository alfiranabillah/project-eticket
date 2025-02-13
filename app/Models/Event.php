<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_event';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
       'id_event', 'id_organizers', 'name', 'location', 'status', 'start_date', 'poster', 'description', 'price', 'category',
    ];
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function ticket() {
        return $this->hasOne(Ticket::class, 'id_event');
    }
}

