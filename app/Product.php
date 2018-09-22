<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function productUsers()
    {
        return $this->hasMany(ProductUser::class);
    }
}
