<?php
	//判断是否存在超全局变量$_GET['id']，如果存在，则做修改后返回index.php，不存在则直接返回index.php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		//查询$id所对应的学生信息
		//通过引入init.php连接数据库
		require './common/init.php';
		//创建sql查询语句
		$sql = "select * from student where id=$id";
		//执行sql语句，将获取的结果赋值给$res
		$res = mysqli_query($link,$sql);
		//判断查询是否成功
		if(!$res){
			exit('执行sql查询失败，错误：'.mysqli_error($link));	
		}
		//将结果集转换为关联数组
		$edit = mysqli_fetch_assoc($res);
		//释放结果集
		mysqli_free_result($res);
		//关闭连接
		mysqli_close($link);
//		print_r($edit);
		require './view/edit.html';
	}
?>