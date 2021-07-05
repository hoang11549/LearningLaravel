<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'avgRate',
        'id',
        'title',
        'description',

    ];
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}
