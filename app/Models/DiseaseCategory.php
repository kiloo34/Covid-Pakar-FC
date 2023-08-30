<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DiseaseCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'disease_id'
    ];

    /**
     * Get the disease associated with the DiseaseCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function disease(): HasOne
    {
        return $this->hasOne(Disease::class);
    }

    /**
     * Get the disease that owns the DiseaseCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function disease(): BelongsTo
    // {
    //     return $this->belongsTo(Disease::class, 'id', 'disease_id');
    // }
}
