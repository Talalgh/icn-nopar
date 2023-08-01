<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $table = 'documents';

    protected $fillable = [
        'identity',
        'proof_address',
        'commercial_register',
        'user_id',
    ];

    /**
     * Get the user associated with the document.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
