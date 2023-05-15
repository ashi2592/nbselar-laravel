<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable=['store_title','owner_name','store_address','store_image','lat','lng','status'];
    protected $table = 'store';
    
    //protected $guarded = ['id'];
}
