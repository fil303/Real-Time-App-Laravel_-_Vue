<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'reciver_id',
        'massage',
        'read',
        'sender_name',
        'channel',
    ];
}
