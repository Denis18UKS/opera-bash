<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    use HasFactory;

    protected $table = 'age_restrictions';

    protected $fillable = ['tvalue'];

    public function events()
    {
        return $this->hasMany(Event::class, 'id_age_restriction');
    }
}
