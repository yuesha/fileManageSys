// 检查表单数据
function check() {
	var form = document.getElementById("loginForm");
	// 获取表单的值
	var username = document.getElementsByName("username")[0].value;
	var pwd = document.getElementsByName("pwd")[0].value;

	// 表单项进行去除空格的处理
	username = username.replace(/\s*/g,"");
	pwd = pwd.replace(/\s*/g,"");

	// 表单验证
	if (username == '') {
		alert("用户名为空，请重新输入");
		return;
	}else if (pwd == '') {
		alert("密码为空，请重新输入");
		return;
	}else{
		// 表单验证完成
		// alert("验证完成");
		form.submit();
	}
}