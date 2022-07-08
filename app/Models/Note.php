<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'note_text',
    ];

    public function scopePostedWithinDay($query, $days) {
        return $query->where('created_at','>',now()->subDays(value:$days));
    }
}
