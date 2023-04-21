<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DiseaseCategory extends Model
{
    use HasFactory;

    protected $table = 'disease_categories';

    protected $fillable = [
        'code',
        'name'
    ];

    /**
     * Get the disease associated with the DiseaseCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function disease(): HasOne
    {
        return $this->hasOne(User::class, 'disease_id');
    }
}
