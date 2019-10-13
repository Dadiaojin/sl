<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
      protected $table="admin";
    protected $primaryKey='id';
     public $timestamps = false; /*没有    updated_at字段*/
}
