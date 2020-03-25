<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
    protected $fillable = [
        'identifier',
        'recipient',
        'body'
    ];

    public function message_list(){
        return $this->belongsTo('App\MessageList', 'message_list_id');
    }
}
