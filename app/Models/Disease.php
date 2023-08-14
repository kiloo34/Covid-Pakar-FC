<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Disease extends Model
{
    use HasFactory;

    protected $table = 'diseases';

    protected $fillable = [
        'name',
        'code'
    ];

    /**
     * Get the disease that owns the Disease
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function disease(): BelongsTo
    {
        return $this->belongsTo(DiseaseCategory::class);
    }
}
