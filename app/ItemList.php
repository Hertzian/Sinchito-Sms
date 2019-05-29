<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemList extends Model
{
    protected $table = 'item_list';
    protected $fillable = [
        'name'
    ];

    public function item(){
        return $this->hasMany('App/Item');
    }
}
