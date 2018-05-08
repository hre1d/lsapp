<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name - can be changed here
    protected $table = 'posts';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps - can be removed
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
