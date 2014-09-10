<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-9-9
 * Time: 下午5:16
 */

namespace Home\Model;
use Think\Model;
class UserModel extends Model{
    public function login($username, $password){
        /* 检测是否在当前应用注册 */
        $map['username'] = $username;
        $user = $this->where($map)->find();
        if(is_array($user) ){
            /* 验证用户密码 */
            if($password !== $user['password']){
                $this->error = '密码错误！';
                return false;
            }
        } else {
            $this->error = '用户不存在或已被禁用！';
            return false;
        }
        /* 登录用户 */
        $this->autoLogin($user);
        return true;
    }

    /**
     * 注销当前用户
     * @return void
     */
    public function logout(){
        session('user', null);
        session('user_auth_sign', null);
    }

    /**
     * 自动登录用户
     * @param  integer $user 用户信息数组
     */
    private function autoLogin($user){
        /* 更新登录信息 */
        $data = array(
            'uid'             => $user['uid'],
            'last_login_time' => NOW_TIME,

        );
        $this->save($data);

        /* 记录登录SESSION和COOKIES */
        $auth = array(
            'uid'             => $user['uid'],
            'user_name'       => $user['username'],
            'real_name'       => $user['realname'],
            'last_login_time' => $user['last_login_time'],
        );

        session('user', $auth);
        session('user_auth_sign', data_auth_sign($auth));

    }

}
