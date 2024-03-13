<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $guarded = [
        'id'
    ];

    public function images(){
        return $this->hasMany('App\ItemImage');
    }

    public static function boot(){
        parent::boot();
        static::deleting(function($item){
            $item->images()->delete();
        });
    }
}
