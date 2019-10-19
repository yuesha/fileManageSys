<?php

// 变量调试函数
function dump($var)
{
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
}

// 返回上一页的函数
function back($msg)
{
	echo <<<EOF
	<script>
		alert('$msg');
		window.history.back(-1);
	</script>
EOF;
exit;
}

// 提示框跳转函数
function js_alert($msg,$url="")
{
	echo <<<EOF
	<script>
		alert('$msg');
		window.location.href="$url";
	</script>
EOF;
exit;
}