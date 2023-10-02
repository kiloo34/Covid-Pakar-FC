<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Symptom extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the deseaseCategory for the Symptom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deseaseCategory(): HasMany
    {
        return $this->hasMany(deseaseCategory::class);
    }
}
