<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>系统注册</title>
<link rel="stylesheet" href="{{asset('css/login.css')}}" />

</head>
<body>
<div id="box">
	<h1>系统注册</h1>
	<div id="loginbox">
		<form method="post" action="{{url('/regist')}}"  onsubmit="return checkForm()">
                    {{csrf_field()}}
		用户名：<input name="username" type="text" class="input" />
		密码：<input name="password" type="password" id="password" class="input" />
                再输入密码：<input name="password2" id="password2" type="password" class="input" />
		<input type="submit" value="注册" class="button" />
		</form>
            <p id="ts"></p>
            {{-- 错误提示显示validation --}}
     @if(count($errors)>0)
        <div>
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        </div>
        @endif
	</div>
</div>
    <script>
     function checkForm(){
      var pw1 = document.getElementById("password").value;
      var pw2 = document.getElementById("password2").value;
      if(pw1!=pw2)
      {
         pw2notok=document.getElementById("ts").innerHTML="<span style='color:#F00'>输入2次密码不一致</span>";
          return false;
      }
      return true;
  }
    </script>
</body>
</html>