<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Roles extends Model
{
    use HasFactory;
    protected $fillable=['name','is_super_admin','created_at','updated_at'];
    protected $table = 'roles';

    public function get_features_access($role_id){
        $query = "SELECT roles.name, roles.is_super_admin,GROUP_CONCAT(features.features_name SEPARATOR ', ') AS feature_names 
        FROM roles 
        INNER JOIN role_features ON role_features.role_id = roles.id 
        INNER JOIN features ON features.id = role_features.feature_id
        where roles.id=$role_id GROUP BY roles.name, roles.is_super_admin;";
        $results = DB::select(DB::raw($query));
        return $results;
    }
    
}
