<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Features extends Model
{
    use HasFactory;
    protected $fillable=['features_name','created_at','updated_at'];
    protected $table = 'features';
}
