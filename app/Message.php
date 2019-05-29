<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
    protected $fillable = [
    ];

    public function message_list(){
        return $this->hasOne('App/MessageList', 'message_list_id');
    }
}
