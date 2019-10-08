<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelets;
class Member extends Model
{
    // 输入：php artisan make:model Http\Models\Member
    protected $table='member';
    protected $primaryKey='id';
    protected $fillable=['name','age','email','head'];
    public $timestamps = false; /*没有    updated_at字段*/

 
}
