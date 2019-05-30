<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $fillable = [
        'name','number'
    ];

    public function item_list(){
        return $this->hasOne('App/ItemList', 'item_list_id');
    }
}
