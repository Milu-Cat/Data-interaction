<?php
//$s="[
//         {'name':'liy','typ':['女','18','164']},
//         {'name':'liy','typ':['女','18','164']},
//         {'name':'liy','typ':['女','18','164']}
//]";
//$res=$_GET["callback"];
//echo $res."($s)";

//$uname=$_GET["name"];
//$upwd=$_GET["pwd"];
//if($uname=="123" && $upwd=="123"){
//	  echo $uname.":".$upwd;
//}

//$name=$_POST["name"];
//$pwd=$_POST["pwd"];
//if($name=="小明" && $pwd=="123"){
//	  echo $name.":".$pwd;
//}

//echo '[
//          {"name":"lily","age":"18","sex":"女"}, 
//          {"name":"lily","age":"18","sex":"女"},
//          {"name":"lily","age":"18","sex":"女"}
//   ]'

$call=$_GET["callback"];
$x='[
            {"name":"lily","age":"18","sex":"女"}, 
            {"name":"lily","age":"18","sex":"女"},
            {"name":"lily","age":"18","sex":"女"}
     ]';
    echo $call."($x)";
?>