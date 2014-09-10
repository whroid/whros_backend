<?php
$arr1=array(
	//'配置项'=>'配置值'
 // 'URL_MODEL'=>1,//path-info 模式
    'URL_MODEL'          => '0', //URL模式
);
$arr2=include './config.php';

return array_merge($arr1,$arr2);
?>