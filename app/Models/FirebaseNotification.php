<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirebaseNotification extends Model
{
    use HasFactory;
    protected $table = 'firebase_notifications';

    protected $fillable = [
        'title',
        'text',
        'item_type',
        'item_type_id',
        'receiver_id',
        'is_read',
    ];
}
