<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //allow to mass asign will be only the body...
    protected $fillable = [
                            'body',
                            'date'
    ];
    public function task()
    {
        return  $this->belongsTo(Task::class);
    }
    public function date()
    {
        $oldDate = date('Y-m-d H:i:s');
        $newDate = date('l, F d, Y H:i a', strtotime($oldDate));
        return $newDate;
    }
}
