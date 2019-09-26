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
        <h1>member表添加</h1>
		<form action="{{url('/adduser')}}" method="post">
			{{ csrf_field() }}
                       
		<table width="300" border="0">
  <tbody>
    <tr>
      <td>姓名：</td>
      <td><input type="text" name="name" value="" ></td>
    </tr>
    <tr>
      <td>年龄：</td>
      <td><input type="number" name="age" value=""></td>
    </tr>
    <tr>
      <td>邮箱：</td>
      <td><input type="email" name="email" value=""></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit"><input type="reset"></td>
      
    </tr>
  </tbody>
			</table></form>

       

</table>
