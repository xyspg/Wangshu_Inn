<html>
<body>
<h1>The sort table page</h1>
<table border="1">
<?php
include("connectphp.php");
$result = $conn->query('SELECT heroname,value FROM sorttable ORDER BY value DESC');
$datacountInSort = mysqli_num_rows($result);
echo "<tr><td style='color:rebeccapurple'>英雄</td><td style='color: rebeccapurple'>分数</td></tr>";
for($i=0;$i<$datacountInSort;$i++){
    $arrSort = mysqli_fetch_assoc($result);
    $heroname = $arrSort['heroname'];
    $value = $arrSort['value'];
    echo "<tr><td>{$heroname}</td><td>{$value}</td></tr>";
}
?>
</table>
</body>
</html>
