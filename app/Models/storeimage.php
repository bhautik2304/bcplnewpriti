<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storeimage extends Model
{
    use HasFactory;

    protected $table='storeimage';

    public function scopeImages($query, $store)
    {
        return $query->where('store_id', '=', $store);
    }

    // public function storeImages()
    // {
    //     return $this->hasMany(Comment::class);
    // }
}
