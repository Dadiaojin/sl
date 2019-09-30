<?php

namespace App\Http\Models;

use App\Http\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Request;

class Del extends Model
{
    use SoftDeletes;

    protected $table = 'member'; //表名
    protected $primaryKey = 'id'; //主键
    protected $datas = ['deleted_at'];

     
}
?>