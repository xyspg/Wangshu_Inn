<?php
    include('mysqlserver.php');
    header("Content-type:text/html;charset=utf-8");

    $name=$_COOKIE["name"];
    $password=$_COOKIE["password"];
    $num=$_POST["num"];
    $num=strval($num);

    $sql = "update users set number='$num' where name = '$name' and password='$password' ";
    mysqli_query($conn,$sql);

    echo "<a href='index.php'>修改成功，返回登录</a>";
?>