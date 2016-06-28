<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function notes()
    {
        // relationship to the tasks table and notes table.....
        return $this->hasMany(Note::class);
    }

        // for specific paths/destinations....
    public function path()
    {
        return '/index/' . $this->id;
    }
}
