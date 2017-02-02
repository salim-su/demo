<?php
/**
 * Created by PhpStorm.
 * User: salim_su
 * Date: 2017/1/24 0024
 * Time: 12:44
 */
header('content-type:text/html;charset=utf-8');

//普通数组 数组中可以放数字，字符串，布尔等等，不限制类型
$foodArray = array('西蓝花','番茄','西红柿','菠菜');
echo $foodArray[2];
echo '<br>';
//关系型数组
$star = array('name'=>'kaka','age'=>'22','height'=>'183cm');
echo $star['name'];
echo '<br>';
//php中'' ""的区别
echo "双引号中的字符串";
echo '<br>';
echo '单引号中的字符串';
echo '<br>';

$person = '葫芦娃';
//php中  单双印好的区别 在字符串的内容跟变量名一致时
//双引号 会将变量的值传进去
//单引号 就是引号中的内容，也就是字符串
echo "$person";
echo '<br>';
echo '$person';














