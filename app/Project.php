<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
   protected $fillable = ['title', 'user_id', 'description'];


   public function user()
    {
        return $this->belongsTo(User::class);
    }
}
