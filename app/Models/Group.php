<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function children()
    {
        return $this->hasMany(Group::class, 'id_parent', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'id_group', 'id'); 
    }    

}
