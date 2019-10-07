<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="{{asset('css/page.css')}}">
        <style>
            li{
                float: left;
                list-style: none;
                margin-left: 10px;
            }
            
        </style>
    </head>
    <body>
        <h1>member表信息</h1>
        <a href="{{url('addview')}}">添加</a>
        <table border="1">
  <tbody>
    <tr>
      <td>姓名</td>
      <td>年龄</td>
      <td>邮箱</td>
      <td>操作</td>
    </tr>
	  @foreach($data as $v)
	  <tr>
      <td>{{$v->name}}</td>
      <td>{{$v->age}}</td>
      <td>{{$v->email}}</td>
      <td><a href="{{url('updateuser')}}/{{$v->id}}">修改</a>&nbsp;|&nbsp;<a href="{{url('del')}}/{{$v->id}}">删除</a></td>
    </tr>
	  @endforeach
           <tr><td colspan="4">共有{{$data->total()}}条，当前页为：{{$data->currentPage()}}</td></tr>
           <tr><td colspan="4">{{$data->render()}}</td></tr>
  </tbody>
</table>

      
         
         
         
         
         
       
         
            
            
    </body>
</html>