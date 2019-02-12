<?php
	header("content-type:text/html;charset=utf-8");
	$id=$_POST["id"];
	$username=$_POST["username"];
	$age=$_POST["age"];
	$num=$_POST["num"];
	$tea=$_POST["tea"];
	$sex=$_POST["sex"];
	$st_num=$_POST["st_num"];
	$qk=$_POST["qk"];
//	include("conn.php"); 
	//	第一步连接到数据库服务器
   $conn=mysql_connect("localhost","root","root")or die("不能连接数据库服务器");
    // 选择数据库
   $s_db=mysql_select_db("web_lcr1",$conn);
   //设置字符集
   mysql_query("set names utf8");
   $add="INSERT INTO st (id,st_name,st_age,num,teacher,sex,st_num,qk) VALUES ('".$id."','".$username."','".$age."','".$num."','".$tea."','".$sex."','".$st_num."','".$qk."')"; 
   echo $add;
   $result=mysql_query($add);
   if($result){
   	  echo "成功";
   }else{
   	  echo "失败";
   }
?>

