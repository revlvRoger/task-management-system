<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //allow to mass asign will be only the body...
    protected $fillable = ['body'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
