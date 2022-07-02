<?php
	header("Content-type:text/html;charset=utf-8");
	include('mysqlserver.php');

	$name1=$_POST["username1"];
	$pwd1=$_POST["userpwd1"];
    $pwd=$_POST["userpw"];

    if(strlen($pwd)<=16){
        $sql = "update users set password='$pwd' where name = '$name1' and password='$pwd1' ";
        $query=mysqli_query($conn,$sql);        
        if(mysqli_affected_rows($conn)){
            echo "<a href='index.php'>修改成功，返回登录</a>";
        }else{
            echo "<a href='index.php'>修改错误，请检查你的用户名或密码，确保没有输入错误，然后返回登录冷静一下再试</a>";
        }
    }else{
        echo "<a href='index.php'>修改错误，请检查你的检查密码位数，然后返回登录冷静一下再试</a>";
    }
?>