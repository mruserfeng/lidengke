<?php
/* 
 * 封装一个MySQL 增加  显示  删除  修改
 * 1.连接数据库 连接符=mysqli_connect('localhost', 'root', 'root', 'newcms');
 * 2.设置字符集 mysqli_set_charset(连接符。‘utf8’);
 * 3.SQL语句 
 * 4.执行SQL语句 mysqli_query(连接符，sql语句);
 */
header("content-type:text/html;charset=utf-8");
class mysql {
    //定义一个连接符的变量
    public $link;
    //构造方法  =》初始化时程序自动执行
    public function __construct($host, $user, $password, $database){
        $this->link= mysqli_connect($host, $user, $password, $database);//连接数据库
        mysqli_set_charset($this->link, 'utf8');
    }
    //新增方法
    public function mysql_Insert($table,$data){
	  //遍历数组，得到每一个字段和字段的值
	  $key_str='';
	  $v_str='';
	  foreach($data as $key=>$v){
	    //$key的值是每一个字段
	   //$v的值是每一个字段所对应的值
            $key_str.=$key.',';
            $v_str.="'$v',";
	  }
	  $key_str=rtrim($key_str,',');
	  $v_str=rtrim($v_str,',');
	  //sql
	  $sql="insert into $table ($key_str) values ($v_str)";
          $info= mysqli_query($this->link, $sql);
          return $info;
  }
    //删除方法
    public function mysql_delete($table,$name,$value){
        $sql="delete from $table where $name =$value";
        $data=mysqli_query($this->link,$sql);
        return $data;
    }
    //修改方法
    public function mysql_update($table,$name,$value){
        $sql="select * from $table where $name =$value";
        $data=mysqli_query($this->link,$sql);
        $info= mysqli_fetch_assoc($data);
        return $info;
    }
    //查询方法
    public function mysql_select($table){
        $sql="select * from $table ";
        $data=mysqli_query($this->link,$sql);
        $info= mysqli_fetch_all($data,MYSQLI_ASSOC);
        return $info;
    }
}
