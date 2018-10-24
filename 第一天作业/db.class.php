<?php
header("content-type:text/html;charset=utf-8");
/* 
 * 封装一个MySQL 增加  显示  删除  修改
 * 1.连接数据库 连接符=mysqli_connect('localhost', 'root', 'root', 'newcms');
 * 2.设置字符集 mysqli_set_charset(连接符。‘utf8’);
 * 3.SQL语句 
 * 4.执行SQL语句 mysqli_query(连接符，sql语句);
 */
class mysql{
    public $link;//定义一个连接符的变量
    public $sql;//定义一个变量
    //如何定义一个构造函数
    public function __construct($localhost,$login,$password,$dbname){
        $this->localhost=$localhost;//服务器IP地址
        $this->login=$login;//数据库账号
        $this->password=$password;//数据库密码
        $this->dbname=$dbname;//数据库库名
        $this->link=mysqli_connect($this->localhost,$this->login,$this->password,$this->dbname); //1.连接数据库
        mysqli_set_charset($this->link, 'utf8');  //2.设置字符集
    }
    //定义一个MySQL新增修改删除的方法
    public function query_sql($sql){
        //执行SQL语句
        $data=mysqli_query($this->link,$sql);
        return $data;
    }
    //定义一个MYSQL新增的类
    public function insert(){
        $sql='insert into';
        return $sql;
    }
    //定义一个MySQL查询的方法
    public function select($table){
        //4.执行SQL语句
        $sql="select * from $table";
        $data=mysqli_query($this->link,$sql);
        $info=mysqli_fetch_all($data,MYSQLI_ASSOC);
        return $info;
    }
     //单独修改的方法
    public function update($sql){
        //1.根据条件查询出需要的信息  1.连接数据库  2设置字符集  3书写SQL   4执行SQL   资源转化
        $data= mysqli_query($this->link, $sql);
        $info= mysqli_fetch_assoc($data);
        return $info;
    }
}
$mysql=new mysql('localhost','root','root','newcms');
$data=$mysql->select('types');
print_r($data);