<?php

namespace App;

// Model of MVC
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
