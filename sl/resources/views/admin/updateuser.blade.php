<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>member表修改</h1>
		<form action="{{url('update')}}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="id" value="{{$id}}">
		<table width="300" border="0">
  <tbody>
    <tr>
      <td>姓名：</td>
      <td><input type="text" name="name" value="{{$date->name}}" ></td>
    </tr>
    <tr>
      <td>年龄：</td>
      <td><input type="number" name="age" value="{{$date->age}}"></td>
    </tr>
    <tr>
      <td>邮箱：</td>
      <td><input type="email" name="email" value="{{$date->email}}"></td>
    </tr>
    <tr>
        
        <td>头像：</td>
        <td>
            @if(!empty($date->head))
            <img src="{{asset($date->head)}}">
            @else
            <h1>空</h1>
            @endif
        </td>
      
    </tr>
    <td>更改头像：</td>
      <td><input type="file" name="head" multiple="multiple"></td>
      
    </tr>
    <tr>
      <td colspan="2"><input type="submit"><input type="reset"></td>
      
    </tr>
  </tbody>
			</table></form>

       {{-- 错误提示显示validation --}}
     @if(count($errors)>0)
        <div>
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        </div>
        @endif

</table>
