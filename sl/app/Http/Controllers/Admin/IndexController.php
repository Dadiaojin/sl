<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;/*用户输入接收类*/
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
     public function index(){
        echo "访问Controllers的Admin模块的index控制器的index方法成功";
        echo "<br>";
        $date=Input::all();
        print_r($date);
        echo "<br>";
        $name=Input::get('name');
        echo $name;
        echo "<br>";
        $info=Input::only(['dadjin','sex']);
        print_r($info);
        echo '<br>';
        $info2=Input::except('dadjin');
        print_r($info2);
    }
    public function demo(){
        echo "访问Controllers的Admin模块的index控制器demo成功";
    }
    /*接收函数:all():获取所有用户输入
      get():获取单个输入
     * only():获取指定用户输入
     * except():获取非指定用户 用户打入也无法用
     *      */
    
}
