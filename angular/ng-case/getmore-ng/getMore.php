<?php 
	// 读取json 并返回给浏览器
	$arr = file_get_contents('info.json');
    echo $arr;
 ?>