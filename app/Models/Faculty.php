<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'image',
        'is_active',
        'no_urut',
        'description',
        'id_category',
    ];


    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class, 'faculty_id');
    }

    public function scheduleSessions(): HasMany
    {
        return $this->hasMany(ScheduleSession::class, 'faculty_id');
    }

    public function categoryFaculty(): BelongsTo
    {
        return $this->belongsTo(Category_Faculty::class, 'id_category');
    }
}
