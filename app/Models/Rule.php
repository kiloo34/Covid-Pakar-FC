<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rule extends Model
{
    use HasFactory;

    protected $casts = [
        'rules'
    ];

    /**
     * Get the disease_category that owns the Rule
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function disease_category(): BelongsTo
    {
        return $this->belongsTo(DiseaseCategory::class, 'disease_category_id');
    }
}
