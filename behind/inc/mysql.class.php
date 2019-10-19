<?php

/**
 * PHP 连接 MySQL 的类库
 */
class mysql
{
	private $host = "127.0.0.1";
	private $serverUser = "root";
	private $serverPw = "root";
	private $database = "file_manage_sys";
	private $linkId;
	private $lastSQL;
	private $lastQuery;

	// 构造函数
	function __construct()
	{
		// 实例化的时候自动连接数据库
		$this -> link();
	}

	// 连接数据库服务器
	public function link()
	{
		if (!$this -> linkId) {
			$linkId = @mysqli_connect(
				$this -> host,
				$this -> serverUser,
				$this -> serverPw,
				$this -> database
			);
			if (!$linkId) {
				echo $this -> getError();
				exit;
			}else{
				$this -> linkId = $linkId;
			}
		}
	}

	// 执行原生 sql 语句
	public function execute($sql)
	{
		if (!$this -> linkId) {$this -> link;}
		// 获取记录集
		$res = mysqli_query($this -> linkId,$sql);
		if ($res) {
			// 记录最后一次成功的 sql 语句及记录集
			$this -> lastSQL = $sql;
			$this -> lastQuery = $res;
		}
		return $res;
	}

	private function getError()
	{
		// 错误等级
		$data['errno'] = mysqli_connect_errno();
		$data['error'] = mysqli_connect_error();
		return "数据库操作出现错误！<br />错误代码：".$data['errno']."<br />错误信息：".$data['error'];
	}
}