<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zhuce</title>
</head>
<body>
      <form action="test.php" method="post" name="myf">
          <p>用户名<input type="text" name="username" value="<?php 
          if(empty($_COOKIE["username"])){
          	  echo '';
          }else{
          	  echo $_COOKIE["username"];
          }
          ?>"></p>
          <p>密码<input type="text" name="pwd"value="<?php 
          if(empty($_COOKIE["username"])){
          	  echo '';
          }else{
          	  echo $_COOKIE["pwd"];
          }
          ?>"></p>
          <p>性别<input type="radio" name="sex">男<input type="radio" name="sex">女</p>
          <p>课程<input type="checkbox" value="html" name="kc[]">HTML<input type="checkbox" value="js" name="kc[]">JS<input type="checkbox" value="jq" name="kc[]">JQ</p>
          <p>城市<select name="mys">
            <option value="">北京</option>
            <option value="">杭州</option>
            <option value="">成都</option>
          </select></p>
          <input type="submit" value="提交">
      </form>
</body>
<script>

</script>

</html>