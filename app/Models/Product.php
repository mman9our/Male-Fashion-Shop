<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'price_sale',
        'image',
        'status',
        'description',
        'stock', 
        'color',
        'quantity',
        'has_discount',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsTo(Categorie ::class);
    }

    public function sizes(){
        return $this->belongsTo(Size::class);
    }

    public function brands(){
        return $this->belongsTo(Brand::class);
    }

         
}
