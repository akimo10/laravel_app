<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
  use SoftDeletes;
    protected $dates = ['deleted_at'];

    // protected $table = 'todos';
    protected $fillable = [
      'title',
      'user_id',
      'deleted_at'
    ];

    public function getByUserId($id)
    {
        return $this->where('user_id', $id)->get();
    }
}
