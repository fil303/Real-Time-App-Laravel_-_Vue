<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'reciver_id',
        'channel',
        
    ];

    // protected $casts = [
    //     'member' => 'array'
    // ];
}
