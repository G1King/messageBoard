<?php 
 include('./index.php');
 $id = $_GET['id'];
 echo $id;
 $delSql = "DELETE  FROM  `message` WHERE `id`=".$id;
 if(mysqli_query($con, $delSql)) {
     # code...
     echo '删除成功';
 }else{
     echo '删除失败'.mysqli_error($con);
 }
?>