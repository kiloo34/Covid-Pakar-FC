<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code'
    ];

    /**
     * Get the disease that owns the Disease
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories(): BelongsTo
    {
        return $this->belongsTo(DiseaseCategory::class, 'disease_id');
    }

    /**
     * Get all of the disease_category for the Disease
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function categories(): HasMany
    // {
    //     return $this->hasMany(DiseaseCategory::class, 'disease_id', 'id');
    // }
}
