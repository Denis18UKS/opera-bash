<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'duration',
        'id_age_restriction',
        'description',
        'team',
        'image',
        'show_date',
    ];

    public function age()
    {
        return $this->hasMany(Age::class, 'id_age_restriction');
    }
}
