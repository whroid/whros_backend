<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(is_login()){
            $user = session('user');
            $this->assign('user',$user);
           $this->display();

        }
        else{
           $this->redirect('Login/index');

        }


      //  $this->U('Login/index');
    }
    public function hello()
    {
        $this->show('aaaaa');
    }
}