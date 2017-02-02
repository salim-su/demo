<?php 
	// 获取 post数据
	$key = $_POST['name'];

	// 获取 一个value 这里使用 关系型数组
	$starArr =array(
		'baby'=>array('img'=>'images/baby.jpg','val'=>'baby'),
		'hxm'=>array('img'=>'images/hxm.jpg','val'=>'教主'),
		'lh'=>array('img'=>'images/lh.jpg','val'=>'红魔')
		);

	echo json_encode($starArr[$key]);



















	// 使用key  获取 对应的value 这里是一个 数组

//	$oneStar = $starArr[$key];

	// 将 数组中的 两个 值 都返回给用户
//	echo $oneStar[0];

	// 为了 在浏览器分隔方便 这里 添加一个分隔符
//	echo '|';
//
//	echo $oneStar[1];

 ?>