<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SymptomDiseaseCategory extends Model
{
    use HasFactory;

    protected $fillable = ['symptom_category_id', 'disease_category_id'];

    /**
     * Get the symtom_category that owns the SymptomDiseaseCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function symptom_category(): BelongsTo
    {
        return $this->belongsTo(SymptomCategory::class, 'symptom_category_id');
    }

    /**
     * Get the disease_category that owns the SymptomDiseaseCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function disease_category(): BelongsTo
    {
        return $this->belongsTo(DiseaseCategory::class, 'disease_category_id');
    }
}
