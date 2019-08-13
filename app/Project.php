<?php

namespace App;

// Model of MVC
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        $this->tasks()->create($task);

        // Task::create([
        //     'project_id' => $this->id,
        //     'description' => request('description')
        // ]);
    }
}
