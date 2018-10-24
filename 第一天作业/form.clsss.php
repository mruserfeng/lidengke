<?php
header("content-type:text/html;charset=utf-8");
//验证身份证号  18位或者17位加一个X /^\d{18}|\d{17}x$/i
//帐号(字母开头，允许5-16字节，允许字母数字下划线)：^[a-zA-Z][a-zA-Z0-9_]{4,15}$ 
//建立一个表单验证的类 
/**
 * Description of form
 *
 * @author 郝云云123
 */
class form {
    //1.手机号必须为11位    且 开头必须以1开头  第二位可以为3576  第三位必须是5   其余位数可自行调整
    public function check_phone($phone){
        $reg='/^1[3576]5\d{8}$/';
        if(!preg_match($reg, $phone)){
            $data='手机号不合法';
        }else{
            $data='手机号正确';
        }
        return $data;
    }
    //2.用户名开头首字母必须为大写字母   Haoyun   长度为6
    public function check_name($name){
        $name_reg='/^[A-Z]\w{5}$/';
        if(!preg_match($name_reg, $name)){
            $data='用户名不符合我的要求';
        }else{
            $data='用户名符号我的要求';
        }
        return $data;
    }
    //3.一个数据必须全部为数字，且不能少于6位
    public function check_number($number){
        $number_reg='/^\d{6,}$/';
        if(!preg_match($number_reg, $number)){
            $data='用户名不符合我的要求';
        }else{
            $data='用户名符号我的要求';
        }
        return $data;
    }
    //4.用户名必须为英文     值得长度为6~10位
    public function check_username($username){
        $username_reg='/^[a-zA-Z]{6,10}$/';
        if(preg_match($username_reg, $username)){
            $data='符号我的要求';
        }else{
            $data='不符合我的要求';
        }
        return $data;
    }
    //5.密码长度不能少于六位    0-9  a-z A-Z 
    //验证身份账号是否合理
    public function check_password($password){
        $password_reg='/^[0-9a-zA-Z_&%]{6,}$/';
        if(preg_match($password_reg, $password)){
            $data='密码验证符号要求';
        }else{
            $data='密码验证不符合咱的要求';
        }
        return $data;
    }
    public function check_card($card){
        $card_red='/^\d{18}|\d{17}[xX]$/';
        if(!preg_match($card_red, $card)){
            $data='身份证格式不对';
        }else{
            $data='身份证正确';
            
        }
        return  $data;
    }
    //7.帐号(字母开头，允许5-16字节，允许字母数字下划线)
    public function check_login($login){
        $reg='/^[a-zA-Z][_a-zA-Z0-9]{4,15}$/';
        if(preg_match($reg,$login)){
            $date='格式正确';
        }else{
            $date='格式错误';
        }
        return $date;
    }
}
