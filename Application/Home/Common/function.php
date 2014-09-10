<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-9-10
 * Time: ����3:45
 */

function is_login(){
    $user = session('user');
    if (empty($user)) {
        return 0;
    } else {
        return session('user_auth_sign') == data_auth_sign($user) ? $user['uid'] : 0;
    }
}
/**
 * ��⵱ǰ�û��Ƿ�Ϊ����Ա
 * @return boolean true-����Ա��false-�ǹ���Ա
 * @author ׿ս��
 */
function is_administrator($uid = null){
    $uid = is_null($uid) ? is_login() : $uid;
    return $uid && (intval($uid) === C('USER_ADMINISTRATOR'));
}

/**
 * ����ǩ����֤
 * @param  array  $data ����֤������
 * @return string       ǩ��
 * @author ׿ս��
 */
function data_auth_sign($data) {
    //�������ͼ��
    if(!is_array($data)){
        $data = (array)$data;
    }
    ksort($data); //����
    $code = http_build_query($data); //url���벢����query�ַ���
    $sign = sha1($code); //����ǩ��
    return $sign;
}
/**
 * ϵͳ�ǳ���MD5���ܷ���
 * @param  string $str Ҫ���ܵ��ַ���
 * @return string
 */
function chrent_md5($str, $key = 'chrentAuth'){
    return '' === $str ? '' : md5(sha1($str) . $key);
}