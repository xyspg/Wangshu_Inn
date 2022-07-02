<?php
	header("Content-type:text/html;charset=utf-8");
    
    $file=$_FILES["file"] ["tmp_name"];
    $arr=explode('.',$_FILES["file"] ["name"]);
    $path="image/";
    $name1=$_COOKIE['name'];

    $array=array($name1,end($arr));

    $filename=implode('.',$array);
    $res=move_uploaded_file($file,$path.$filename);

    if($res){
        echo "<p>上传成功:  $path $filename</p>";
    }else{
        echo "上传失败";
    }
?>