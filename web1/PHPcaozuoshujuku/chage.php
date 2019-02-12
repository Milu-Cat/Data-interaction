 <?php
 	 include("conn.php");
 	 $id=$_GET["id"];
 	 $st_name=$_GET["st_name"];
 	 $age=$_GET["st_age"];
 	 $num=$_GET["num"];
 	 $teacher=$_GET["teacher"];
 	 $sex=$_GET["sex"];
 	 $kc_name=$_GET["kc_name"];
 	 $cj=$_GET["cj"];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chage</title>
</head>
<body>
      <form action="chage1.php" method="post" name="myf">
      	<!--type="hidden"隐藏域-->
      	  <p>id<input type="hidden" name="id" value="<?php echo $id ?>"></p>  
          <p>用户名<input type="text" name="st_name" value="<?php echo $st_name ?>"></p>
          <p>年龄<input type="text" name="age" value="<?php echo $age ?>"></p>
          <p>学号<input type="text" name="num" value="<?php echo $num ?>"></p>
          <p>老师<input type="text" name="teacher" value="<?php echo $teacher ?>"></p>
          <p>性别<input type="text" name="sex" value="<?php echo $sex ?>"></p>
          <p>选课<input type="text" name="kc_name" value="<?php echo $kc_name ?>"></p>
           <p>成绩<input type="text" name="cj" value="<?php echo $cj ?>"></p>
          <input type="submit" value="提交">
      </form>
</body>
</html>