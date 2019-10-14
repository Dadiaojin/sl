<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>系统登陆</title>
<link rel="stylesheet" href="{{asset('css/login.css')}}" />

</head>
<body>
<div id="box">
	<h1>系统登录</h1>
	<div id="loginbox">
		<form method="post" action="{{url('/login')}}">
                    {{csrf_field()}}
		用户名：<input name="username" type="text" class="input" />
		密码：<input name="password" type="password" class="input" />
                验证码：<input name="captcha" type="text" class="input" />
                <img src="{{captcha_src()}}" onclick="this.src='{{captcha_src()}}+Math.random()'"/>
		<input type="submit" value="登录" class="button" />
		</form>
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
</div>
</body>
</html>
