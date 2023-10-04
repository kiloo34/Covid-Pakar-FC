<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SymptomCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'symptom_id'];
    
    /**
     * Get the symptom that owns the SymptomCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function symptom(): BelongsTo
    {
        return $this->belongsTo(Symptom::class, 'symptom_id');
    }

    /**
     * Get all of the symtom_disease_category for the SymptomCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function symtom_disease_category(): HasMany
    {
        return $this->hasMany(SymptomDiseaseCategory::class);
    }
}
