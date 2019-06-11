<?php 
include('index.php');
$id = $_POST['id'];
$user = $_POST['user'];
$title = $_POST['title'];
$content = $_POST['content'];
echo "$title";
if ($_POST['submit']) {
    # code...
    $sql1 ="insert into message(id,user,title,content,lastdate)values(NULL,'$user','$title','$content',now())";
   
   if (mysqli_query($con,$sql1)) {
        # code...
        echo "<script>alert('提交成功！返回首页。');location.href='list.php';</script>";
       
   }else{
        echo "插入失败".mysqli_error($con);
      
   }
}
?>