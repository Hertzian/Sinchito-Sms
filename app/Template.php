<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table = 'template';
    protected $fillable = [
        'name','template'
    ];

    public function account(){
        return $this->hasOne('App/Account', 'account_id');
    }
}
