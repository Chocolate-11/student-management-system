<?php
	//连接数据库
	$link = @mysqli_connect('localhost','root','123456','studentdb');
	//判断是否连接成功，否则退出程序
	if($link == false){
		exit('数据库连接失败，错误：'.mysqli_connect_error());
	}
	//设置字符集
	mysqli_set_charset($link,'utf-8');
?>