<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorTranslation extends Model
{
    use HasFactory;
    protected $table = 'colors_translations';

    protected $fillable = [
        'name',
        'lang',
        'color_id',
    ];

    /**
     * Define the relationship to the Color model.
     */
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
