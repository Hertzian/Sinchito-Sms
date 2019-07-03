<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
    protected $fillable = [
        'type','message_limit','balance','status',
    ];

    public function item_list(){
        return $this->hasMany('App/ItemList', 'account_id');
    }

    public function user(){
        // return $this->belogsTo('App/User', 'account_id');
        return $this->hasOne('App/User', 'account_id');
    }

    public function message_list(){
        return $this->hasMany('App/MessageList', 'account_id');
    }

    public function template(){
        return $this->hasMany('App/Template', 'account_id');
    }
}
