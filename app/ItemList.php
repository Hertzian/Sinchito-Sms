<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemList extends Model
{
    protected $table = 'item_list';
    protected $fillable = [
        'name'
    ];

    public function account(){
        // return $this->hasOne('App/Account', 'account_id');
    }

    public function item(){
        return $this->hasMany('App/Item');
    }
}
