<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashDealTranslation extends Model
{
    use HasFactory;
    protected $table = 'flash_deal_translations';

    protected $fillable = [
        'title',
        'lang',
        'flash_deal_id',
    ];

    /**
     * Get the flash deal associated with the flash deal translation.
     */
    public function flashDeal()
    {
        return $this->belongsTo(FlashDeal::class);
    }
}
