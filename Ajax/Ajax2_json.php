<?php
	//获取值
// echo   'var x=[  
//          {"name":"lily","age":"18","sex":"女"},
//          {"name":"john","age":"16","sex":"男"},
//          {"name":"bob","age":"23","sex":"男"}
//  ]'

 //传值
   $name=$_POST["name"];
   $age=$_POST["age"];
   $sex=$_POST["sex"];
   echo $name.':'.$age.':'.$sex;
?>