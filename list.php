<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言板列表</title>
    <?php
    include('index.php');
    ?>
</head>

<body>
    <table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
        <?php
        $selSql = "select * from message order by id desc";
        $query = mysqli_query($con, $selSql);
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr bgcolor="#eff3ff">
                <td>标题： <?php echo $row['title']; ?> <font color="red">用户： <?php echo $row['user']; ?> </td>
                <td>操作</td>
            </tr>
            <tr bgColor="#ffffff">
                <td>发表内容:<?php echo $row['content']; ?></td>
                <td rowspan="2"> <button style="color:red;" data-id=<?php echo $row['id']; ?>>删除</button></td>
            </tr>
            <tr bgColor="#ffffff">
                <td>
                    <div align="right">时间:<?php echo $row['lastdate']; ?>
                </td>
            </tr>
        <?php } ?>
        <tr bgcolor="#f0fff0">
            <td>
                <div align="right"><a href="add.html">返回留言</a>
            </td>
        </tr>

    </table>

    <script>
        let _html = document.getElementsByTagName('button');
        console.log(_html);
        for (const _item of _html) {
            _item.onclick = function() {
                let _id = _item.getAttribute('data-id');
                console.log(_id);
                window.location.href = 'del.php?id=' + _id;
            }
        }
    </script>
</body>

</html>