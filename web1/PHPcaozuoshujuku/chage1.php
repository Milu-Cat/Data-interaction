<?php
	include("conn.php");
	header("content-type:text/html;charset=utf-8");
	$id=$_POST["id"];
	$st_name=$_POST["st_name"];
	$age=$_POST["age"];
	$num=$_POST["num"];
	$tea=$_POST["teacher"];
	$sex=$_POST["sex"];
	$kc_name=$_POST["kc_name"];
	$qk=$_POST["cj"];
	$kc_num="select kc_num from kc where kc_name='$kc_name'";
	$qk_num="select qk_num from kc_qk where cj='$qk'";
	//update 表名 set 列名=值 where 条件;
    $sql="update st set st_name='$st_name',st_age='$age',num='$num',teacher='$tea',sex='$sex',st_num='$kc_num',qk='$qk_num'  where id='$id'";
    $res=mysql_query($sql);
    if($res){
?>
  <script>
   		location.href="chaxun.php";
   	</script>
<?php
}else{
	 echo "修改失败";
}
?>