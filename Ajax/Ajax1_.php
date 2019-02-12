<?php
	//post方法：
// $username=$_POST['name'];
// $pwd=$_POST['pwd'];
// if($username=='abc' && $pwd=='abc'){
// 	   echo "成功";
// }else{
// 	  echo "失败";
// }

//   get方法：
    $uname=$_GET["name"];
    $upwd=$_GET["pwd"];
    if($uname=="abc" && $upwd=="abc"){
    	echo $uname.':'.$upwd;
    }
 
    //向后台自定义传值,不用form表单  
//  $username=$_GET["name"];
//$pwd=$_GET["pwd"];
//echo $username.":".$pwd;
?>