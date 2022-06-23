<html>
<body>
<h1>The character-weapon page</h1>
<table border="1">
    <?php
    include("connectphp.php");
    $result = $conn->query('SELECT * from characterweaponsoup');
    $datacountCharacter = mysqli_num_rows($result);
    echo "<tr><td style='color:rebeccapurple'>英雄</td><td style='color: rebeccapurple'>武器材料</td></tr>";
    for($i=0;$i<$datacountCharacter;$i++){
        $arrCharacter = mysqli_fetch_assoc($result);
        $hero = $arrCharacter['hero'];
        $weapon = $arrCharacter['weapon'];
        echo "<tr><td>{$hero}</td><td>{$weapon}</td></tr>";
    }
    ?>
</table>
</body>
</html>
