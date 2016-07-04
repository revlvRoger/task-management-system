<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoHistory extends Model
{
    protected $fillable = [
        'author_id',
        'status',
        'todo_id'
    ];

    public static function createHistory($author, $status, $todo)
    {
        self::create([
            'author_id' => $author,
            'status' => $status,
            'todo_id' => $todo
        ]);
    }
}
