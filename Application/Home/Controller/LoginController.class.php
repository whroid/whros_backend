<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-9-9
 * Time: ����4:35
 */

namespace Home\Controller;
use Think\Controller;

class LoginController extends  Controller {

    public function login()
    {
        $user=M('User');//������User��������ĸ��д�������Զ���֤����ʧЧ��
        $count= $user->count();
        echo "coun:'.$count'����";
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
            $this->error('wo cuo l e ������û�ҵ���');
        }

    }

} 