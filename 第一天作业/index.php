<?php
header("content-type:text/html;charset=utf-8");
//如何创建类  关键词   class 
//类成员：属性 （常量  变量   方法）
class car{
    //车的属性   ：轮胎   颜色     发动机   参数三
    public $color='红色';
    public $data='蓝鲨';
    public $data1="发动机";
    const DATA3='参数三';
    //构造函数 ： 程序最先执行   目的：一般用于赋值  localhost  root  root  newcms   ::
    //$this->  指向赋值
    public function __construct(){
        echo $this->color;
        echo $this->data;
        echo "构造函数执行了没有？"."</br>";
    }
    //默认为public   //return  将返回的信息传输过来
    public function cars(){
        $data='车子是用来开的';
        return $data;
    }
    //获取长方形的周长  长   宽
    public function zhouChang($a,$b){
        $data=($a+$b)*2;
        return $data;
    }
    //获取长方形的面积  长   宽
    public function mianJi($a,$b){
        $data=$a*$b;
        return $data;
    }
    //判断学生是否合格
    public function dataSchool($score){
        if($score>80){
            $data='及格';
        }else{
            $data='不及格';
        }
        return $data;
    }
    //析构函数：目的 ：销魂自动执行的方法   防止内存的资源
//    public function __destruct() {
//        echo "</br>"."我走了，不要搭理我";
//    }
}
//实例化  类  关键词：new 
$cars=new car();
//如何取出一个变量
echo '颜色'.$cars->color;//->  指向
echo "蓝鲨".$cars->data;
echo "发动机".$cars->data1;
echo "</br>";
//如何取出一个常量   类名::常量的name值 （常量的大写）
echo car::DATA3;
echo "</br>";
//如何取出类里的方法
echo $cars->cars();
echo "</br>";
echo $cars->zhouChang(5, 5);
echo "</br>";
echo $cars->mianJi(5, 8);
echo "</br>";
echo $cars->dataSchool(85);
//重新定义新的mysql类
class mysql{
    //ip地址  账号  密码   库名     login    password    
    public $ipName;
    public $login;
    public $password;
    public $datamysql;
    //构造函数
    public function __construct($ipName,$login,$password,$datamysql) {
        $this->ipName=$ipName;//ip地址
        $this->login=$login;//账号
        $this->password=$password;//密码
        $this->datamysql=$datamysql;//库名
    }
}
//调取mysqli信息
$mysql=new mysql('localhost','root','root','newcms');
