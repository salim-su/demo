<?php
/**
 * Created by PhpStorm.
 * User: salim_su
 * Date: 2017/1/25 0025
 * Time: 15:41
 */
header('content-type:text/html;charset=utf-8');
$key = $_POST['name'];

$imageArr = array(
    'baby'=>array('../images/baby.jpg','杨颖'),
    'xiaoming'=>array('../images/hxm.jpg','黄晓明'),
    'luhan'=>array('../images/lh.jpg','鹿晗')
);
$image = $imageArr[$key][0];
$name = $imageArr[$key][1];
//$value = $imageArr[$key];
echo $image;
echo '|';
echo $name;
//echo json_encode($value);
//echo json_encode($imageArr);