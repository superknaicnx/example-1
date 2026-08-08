<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'is_completed',
        'due_date',
    ];

    protected $casts = [
        'is_completed' => 'boolean',
        'due_date' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
