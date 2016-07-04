<?php

namespace App;

use App\Author;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'author_id', 'status'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
