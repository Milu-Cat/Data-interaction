<?php
	header("content-type:text/html;charset=utf-8");
 $conn=mysql_connect("localhost","root","root") or die("不能连接数据库服务器");
  $s_db=mysql_select_db("web_lcr1",$conn);
   mysql_query("set names utf8");
?>