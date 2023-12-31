<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    protected $guarded = [];
    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        return asset('website/images/' . $this->image);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);

    }//end fo category
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'product_order');

    }//end of orders


}
