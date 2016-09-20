<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title'];

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
    public function date()
    {
        $oldDate = date('Y-m-d H:i:s');
        $newDate = date('l, F d, Y H:i a', strtotime($oldDate));
        return $newDate;
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
