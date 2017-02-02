<?php
/**
 * Created by PhpStorm.
 * User: salim_su
 * Date: 2017/1/24 0024
 * Time: 13:16
 */
header('content-type:text/html;charset=utf-8');
echo 'get提交的页面';
//通过$_GET['KEY']即可获取数据  得到key 的 属性值
echo $_GET['username'];
echo $_GET['password'];
//没有的可以，会报错
//echo $_GET['nanaan'];

echo '<h1>'.$_GET['username'].'欢迎你</h1>';