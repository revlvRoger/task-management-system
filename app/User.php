<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
                            'username',
                            'email',
                            'password'
                            ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function path()
    {
        return '/users/' . $this->id;
    }
}
