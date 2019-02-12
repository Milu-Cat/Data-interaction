<?php
   $username=$_POST["username"];
   $pwd=$_POST["pwd"];
   $sex=$_POST["sex"];
   $kc=$_POST["kc"];
   $mys=$_POST["mys"];
   
   if($username=="lily"&& $pwd=="123456"){     //用户在30秒内再次打开页面，文本框保留用户名和密码。
    	setcookie("username",$username,(time()+30));
    	setcookie("pwd",$pwd,(time()+30));
    	echo "1";
   }else{
   	  echo "0";
   }
   
   
  foreach($kc as $key=>$value){  //遍历数组
  	echo $value." ";
  };
?>
