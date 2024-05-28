<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'state',
        'staffname',
        'email',
        'ticketdiv',
        'severity',
        'category',
        'description',
        'remark',
    ];

    public function divisioned()
    {
        return $this->belongsTo(Division::class, 'ticketdiv', 'id');
    }
}
