<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDocument extends Model
{
    use HasFactory;
    protected $table = 'customer_documents';

    protected $fillable = [
        'img',
        'number',
        'name',
        'user_id',
    ];

    /**
     * Get the user associated with the customer document.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
