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
    </head>
    <body>
        <h1>I AM DEMO,admin</h1>
        
        @foreach($names as $v)
         {{$v}}
         @endforeach
         <br/>
         @foreach($stu as $v)
         {{$v['name']}}---{{$v['age']}}---{{$v['email']}}<br/>
         @endforeach
          <br/>
         @if($age>=16)
           不是小孩子了，不能光玩游戏
           @else
           还是小孩子，不能经常玩游戏
           @endif
         
            
            
    </body>
</html>