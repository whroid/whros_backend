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

    public function  index()
    {
        $this->display();
    }
    public function login($username = null, $password = null)
    {
        if(IS_POST){
            /* 登录用户 */
            $Users = D('User');
            if($Users->login($username, $password)){ //登录用户
                //TODO:跳转到登录前页面
                $this->success('登录成功！', U('Index/index'));
            } else {
                $this->error($Users->getError());
            }
        } else {
            if(is_login()){
                $this->redirect('Index/index');
            }else{
                $this->error('不支持get请求');
            }
        }
    }

    public function test()
    {
        echo 'hello';
    }
      public function register()
    {
     $this->display();
    }
} 