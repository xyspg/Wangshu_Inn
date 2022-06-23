<html>
<body>
<h1>The hope predict  page</h1>
<?php
include("connectphp.php");
$result = $conn1->query('SELECT * from activitypredict');
$arrHopePredict = mysqli_fetch_assoc($result);
echo "<p>{$arrHopePredict['what']}</p>";
?>
</body>
</html>
