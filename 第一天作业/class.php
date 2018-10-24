<?php
header("content-type:text/html;charset=utf8");
class mysql{
	public $link; //定义连接符
	public $sql; //
	public $host; //主机
	public $user; //用户名
	public $pass;
	public $db;  //数据库
//定义构	造方法
	public function __construct($host,$user,$pass,$db){
			$this->host=$host;
			$this->user=$user;
			$this->pass=$pass;
			$this->db=$db;	

			$this->link = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
			mysqli_set_charset($this->link,'utf8');
	}
	//新增(修改删除)方法
	public function query($sql){
		$data = mysqli_query($this->link,$sql);
		return $data;
	}


	//修改1  
	public function update($sql){
		$data = mysqli_query($this->link,$sql);
		$info = mysqli_fetch_assoc($data);  //资源转数组
		return $info;
	}
}
//实例化
$mysql = new mysql('localhost','root','root','user');