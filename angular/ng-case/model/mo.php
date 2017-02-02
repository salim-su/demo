<?php

// echo 'success';

//	echo $_POST['age'];
//echo $_POST['age'];
//$arr = array('name'=>'ronadlo','age'=>'32','team'=>'realMadrid');
//echo json_encode($arr);
$key = $_GET['name'];


$imageArr = array(
    'baby'=>array('img'=>'./images/baby.jpg','name'=>'杨颖'),
    'xiaoming'=>array('img'=>'./images/hxm.jpg','name'=>'黄晓明'),
    'luhan'=>array('img'=>'./images/lh.jpg','name'=>'鹿晗')
);
echo json_encode($imageArr[$key]);