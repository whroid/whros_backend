<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-9-9
 * Time: 下午4:35
 */

namespace Home\Controller;
use Think\Controller;

class LoginController extends  Controller {

    public function login()
    {
        $user=M('User');//参数的User必须首字母大写，否则自动验证功能失效！
        $count= $user->count();
        echo "coun:'.$count'个数";
        $username=$_GET['username'];
        $password=$_GET['password'];
        echo "username=$username AND password = $password";

        $news_list=$user->field(array('id','username','password','createtime'))->select();
        echo json_encode($news_list);
        if($user->where("username=$username AND password = $password")->find())
        {
            echo '222username:.$username ,password:'.$password;
            $this->show("username='.$username ' 1111password='.$password");
        }else{
            echo '333username:'.$username ,'password:'.$password;
            $this->error('wo cuo l e 不可能没找到吧');
        }

    }

} 