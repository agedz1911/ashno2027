<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category_Faculty extends Model
{
    protected $fillable = [
        'name',
        'no_urut',
    ];

    public function faculties()
    {
        return $this->hasMany(Faculty::class, 'id_category');
    }
}
