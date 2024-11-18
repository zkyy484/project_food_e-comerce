<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function menu(){
        return $this->belongsTo(Menu::class, 'menu_id','id');
    }

    public function client(){
        return $this->belongsTo(Client::class, 'client_id','id');
    }
}
