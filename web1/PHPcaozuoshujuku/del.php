<?php
   include("conn.php");
   $id=$_GET["id"];
   $sql="delete from st where id=$id";
   $res=mysql_query($sql);
   if($res){
   	?>
   	<script>
   		location.href="chaxun.php";
   	</script>
   	<?php
   	}else{	 
   		echo "删除失败";
   }
?>