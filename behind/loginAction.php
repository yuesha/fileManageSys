<?php
	include "./inc/myfunction.php";
	include "./inc/mysql.class.php";

	// 获取表单项
	$userName = trim(@$_POST['username']);
	$userPw = trim(@$_POST['pwd']);

	// 验证非空
	if ($userName == '') {
		back("用户名不能为空！请重新输入！");
	}else if ($userPw == '') {
		back("密码不能为空！请重新输入！");
	}

	$mysql = new mysql();
	$sql = "select * from manage_info where user_name='{$userName}'";
	$res = $mysql -> execute($sql);
	if ($res -> num_rows == 0) {
		back("此用户不存在！请检查！");
	}else{
		$info = mysqli_fetch_array($res);
		$pw = $info['user_pw'];
		// 如果 数据库当中的密码 与 用户输入的密码相同
		// 则登录成功
		if ($pw != $userPw) {
			back("密码错误！请检查！");
		}else{
			$_SESSION['manage'] = $info;
			js_alert("登录成功！","./manage/index.php");
		}
	}
?>