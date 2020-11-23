<?php
	//通过引入init.php连接数据库
	require './common/init.php';
	
	$name = '';
	//判断表单提交的name，如果超全局变量$_POST['stuname']存在，则将改值赋给$name
	if(isset($_POST['stuname'])){
		$name = $_POST['stuname'];
	}
	//创建sql查询语句
	$sql = "select * from student where name like '%$name%'";
	//执行sql语句，将获取的结果赋值给$res
	$res = mysqli_query($link,$sql);
	//判断查询是否成功
	if($res == false){
		exit('执行sql查询失败，错误：'.mysqli_error($link));	
	}
	//将结果集转换为关联数组
	$data = mysqli_fetch_all($res,MYSQLI_ASSOC);
//	echo '<pre>';
//	print_r($data);
	//释放结果集
	mysqli_free_result($res);
	//关闭连接
	mysqli_close($link);
	
	require "./view/index.html";
?>