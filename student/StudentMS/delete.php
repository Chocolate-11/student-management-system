<?php
	//判断是否存在超全局变量$_GET['id'],如果存在，则做删除操作
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		//通过引入init.php连接数据库
		require './common/init.php';
		//sql删除数据
		$sql = "delete from student where id=$id";
		//执行增、删、改操作，不返回结果集，只返回bool值，不用释放结果集
		$res = mysqli_query($link,$sql);
		if($res==false){
			exit("执行sql查询失败，错误：".mysqli_error($link));
		}
		//关闭数据库链接
		mysqli_close($link);
	}
	//跳转至主页index.php
	header('location:./index.php');
?>