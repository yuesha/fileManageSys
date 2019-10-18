<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>登录</title>
</head>
<body>
	 <form action="#"method="post">
	 	<p>
	 		<span>用户名：</span>
	 		<input type="text" name="username"value="admin"class="num"pattern="^[a-zA-Z][a-zA-Z0-9_]{4,15}$">
	 	</p>
	 	<p>
	 		<span>密码：</span>
	 		<input type="password" name="pwd"class="pass"pattern="^[a-zA-Z]\w{5.17}$"/>
	 		
	 	</p>
	 	<p>
	 		<input type="button" class="btn01"value= "登录">
	 		<input type="button" class="btn02"value="注册">
	 	</p>
	 </form>
	 <style type="text/css">
	 	body{font-size:12px;font-family: "宋体";}
	 	body,form,input,p{padding:0;margin:0;border:0;}
	 	form{
	 		width:320px;height: 150px;padding-top: 20px;margin: 50px auto;background: #f5f8fd;
	 		border-radius: 20px;border: 3px solid#4faccb;
	 	}
p{
	margin-top: 15px;
	text-align: center;
}
p span{
	width:40px;
	display: inline-block;
	text-align: right;
}
.num,.pass{
	width: 152px;
	height:18px;
	border: 1px solid38a1bf;
	padding: 2px 2px 2px 22px;
}
.num{
	background: url(images/1.jpg)no-repeat 5px center#FFF;
	color: #999;
}
.pass{
	background: url(images/2.jpg)no-repeat 5 px center #FFF;
}
.btn01,.btn02{
	width: 60px;
	height: 25px;
	border-radius: 3px;
	border: 1px solid#6b5d50;
	margin-left: 30px;
	background: #3bb7ea;
}

	 </style>
</body>
</html>