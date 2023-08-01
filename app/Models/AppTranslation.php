<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppTranslation extends Model
{
    use HasFactory;
    protected $fillable = [
        'lang',
        'lang_key',
        'lang_value',
    ];
}
