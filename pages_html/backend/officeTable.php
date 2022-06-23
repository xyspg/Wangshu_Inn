<html>
<body>
<h1>The office table page</h1>
<?php
include("connectphp.php");
$result = $conn->query('SELECT one from officetable');
$datacountInOfficeTable = mysqli_num_rows($result);
for ($i = 0; $i < $datacountInOfficeTable; $i++){
    $arrOfficeTable = mysqli_fetch_assoc($result);
    $one = $arrOfficeTable['one'];
    echo "<p>{$one}</p>";
}
?>

</body>
</html>

