<?php
	//获取学生姓名，判断$_POST['name']是否存在，若存在则赋值
	$name = "";
	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}
	//获取学生性别，判断$_POST['gender']是否存在，若存在则赋值
	$gender = "男";
	if(isset($_POST['gender'])){
		$gender = $_POST['gender'];
	}
	//获取学生年龄，判断$_POST['age']是否存在，若存在则赋值
	$age = 18;
	if(isset($_POST['age'])){
		$age = $_POST['age'];
		if($age==false){
			$age = 18;
		}
	}
	//获取学生班级，判断$_POST['class']是否存在，若存在则赋值
	$class = "";
	if(isset($_POST['class'])){
		$class = $_POST['class'];
	}
	//获取学生邮箱，判断$_POST['email']是否存在，若存在则赋值
	$email = "";
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}
	
	if($name==true){
		//通过引入init.php连接数据库
		require './common/init.php';
		//通过判断超全局变量$_POST['id']是否存在，若存在做修改，否则做添加
		$sql = "";
		if(isset($_POST['id'])){
			$id = $_POST['id'];
			//sql修改数据
			$sql = "update student set name='$name',gender='$gender',age='$age',class='$class',email='$email' where id=$id";
		}else{
			//sql添加数据
			$sql = "insert student (name,gender,age,class,email) values ('$name','$gender','$age','$class','$email')";
		}
		//执行增、删、改操作，不返回结果集，只返回bool值，不用释放结果集
		$res = mysqli_query($link,$sql);
		if($res==false){
			exit("执行sql查询失败，错误：".mysqli_error($link));
		}
		//关闭数据库链接
		mysqli_close($link);
		//跳转至主页index.php
		header('location:./index.php');
	}
?>