<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table = 'template';
    protected $fillable = [
        'name', 'content', 'account_id'
    ];

    public function template(){
        return $this->hasMany('App/');
    }
}
