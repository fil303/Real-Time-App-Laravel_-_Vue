<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMassage extends Model
{ 
    use HasFactory;
    protected $fillable=[
    	'sender_id',
    	'group_id',
    	'massage',
    	'sender_name',
    	'read',
    	'channel',
    ];
}
