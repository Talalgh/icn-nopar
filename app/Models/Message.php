<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;


    protected $fillable = [
        'conversation_id',
        'user_id',
        'message'
    ];

    // one conversation to many messages
    public function conversations() {
        return $this->belongsTo(Conversation::class);
    }

    // one user many messages
    public function users(){
        return $this->belongsToMany(User::class);
    }

}
