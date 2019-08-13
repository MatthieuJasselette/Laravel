<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    public function toggleComplete($completed = '!completed')
    {
        $this->update(compact('completed'));
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
