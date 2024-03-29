<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $filable = [
        'label',
    ];

    public function tasks()
    {
        return $this->hasMany(TodoTask::class);
    }
}
