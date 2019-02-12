<?php
  include("conn.php");
  $sql="select st.id,st_name,st_age,num,teacher,sex,st_num,qk,kc_name,cj from st,kc,kc_qk where st.st_num=kc.kc_num && st.qk=kc_qk.qk_num";
  $res=mysql_query($sql);
  $con=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>chaxun</title>
    <style type="text/css">
    	table{
    		 width:900px;
    		 border:1px solid #000;
    		 margin:auto;
    		 border-collapse:collapse;
    		 text-align: center;
    	}
    	td,th{
    		  border:1px solid #000;
    	}
    </style>
</head>
<body>
    <table>
    	<tr>
    		<th>id</th>
    		<th>姓名</th>
    		<th>年龄</th>
    		<th>学号</th>
    		<th>老师</th>
    		<th>性别</th>
    		<th>课程</th>
    		<th>成绩</th>
    		<th>操作</th>
    	</tr>
    	<?php
    		do{
    	?>	
    	 	  <tr>
    	 	  	<td><?php echo $con["id"]?></td>
    	 	  	<td><?php echo $con["st_name"]?></td>
    	 	  	<td><?php echo $con["st_age"]?></td>
    	 	  	<td><?php echo $con["num"]?></td>
    	 	  	<td><?php echo $con["teacher"]?></td>
    	 	  	<td><?php echo $con["sex"]?></td>
    	 	  	<td><?php echo $con["kc_name"]?></td>
    	 	  	<td><?php echo $con["cj"]?></td>
    	 	  	<td><a href='del.php?id=<?php echo $con["id"]?>'>删除</a>/<a href='chage.php?id=<?php echo $con["id"]?>&st_name=<?php echo $con["st_name"]?>&st_age=<?php echo $con["st_age"]?>&num=<?php echo $con["num"]?>&teacher=<?php echo $con["teacher"]?>&sex=<?php echo $con["sex"]?>&kc_name=<?php echo $con["kc_name"]?>&cj=<?php echo $con["cj"]?>'>修改</a></td>
    	 	  </tr>
    	 <?php
    	 }while($con=mysql_fetch_array($res));
    	 ?> 	   	
    </table>
</body>
</html>