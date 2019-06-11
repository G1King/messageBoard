<?php
// $sql = "CREATE TABLE if not exists `message` (
//  `id` tinyint(1) NOT NULL auto_increment,
//  `user` varchar(25) NOT NULL,
//  `title` varchar(50) NOT NULL,
//  `content` tinytext NOT NULL,
//  `lastdate` timestamp NOT NULL,
//  PRIMARY KEY (`id`)
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1" ;
$con = mysqli_connect('localhost', 'root', 'root', 'test');
// if (mysqli_connect_errno($con)){
//     echo '失败'.mysqli_connect_error($con);
// }else{
//     echo "链接成功";
// }

//  if(mysqli_query($con, $sql)) {
//     # code...
//     echo "创建表成功";
    
//  }else{
//      echo "创建表失败" . mysqli_error($con);
//  }
// mysqli_close($con);
?>