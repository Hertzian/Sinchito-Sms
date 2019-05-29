<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageList extends Model
{
    protected $table = 'message_list';
    protected $fillable = [
    ];

    public function account(){
        return $this->hasOne('App/Account', 'account_id');
    }

    public function message(){
        return $this->hasMany('App/Message');
    }
}
