<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Symptom extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get all of the symptom_categories for the Symptom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deseaseCategory(): HasMany
    {
        return $this->hasMany(SymptomCategory::class);
    }
}
