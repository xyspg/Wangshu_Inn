<html>
<body>
<h1>The day regular material page</h1>
<table border="1">
<?php
    include("connectphp.php");
    $result = $conn->query('SELECT * from dayreglmet');
    $arrDayReglMet = mysqli_fetch_assoc($result);
    $whatDay = date('w');
    $monMet = $arrDayReglMet['Mon'];
    $tueMet = $arrDayReglMet['Tue'];
    $wedMet = $arrDayReglMet['Wed'];
    $thuMet = $arrDayReglMet['Thu'];
    $friMet = $arrDayReglMet['Fri'];
    $satMet = $arrDayReglMet['Sat'];
    $sunMet = $arrDayReglMet['Sun'];
//    echo "<h3>{$whatDay}</h3>";
    if ($whatDay == '1'){
        echo "今天是：星期一";
        echo "<br>";
        echo "材料有：{$monMet}";
    }
    elseif ($whatDay == '2'){
        echo "今天是：星期二";
        echo "<br>";
        echo "材料有：{$tueMet}";
    }
    elseif ($whatDay == '3'){
        echo "今天是：星期三";
        echo "<br>";
        echo "材料有：{$wedMet}";
    }
    elseif ($whatDay == '4'){
        echo "今天是：星期四";
        echo "<br>";
        echo "材料有：{$thuMet}";
    }
    elseif ($whatDay == '5'){
        echo "今天是：星期五";
        echo "<br>";
        echo "材料有：{$friMet}";
    }
    elseif ($whatDay == '6'){
        echo "今天是：星期六";
        echo "<br>";
        echo "材料有：{$satMet}";
    }
    else{
        echo "今天是：星期日";
        echo "<br>";
        echo "材料有：{$sunMet}";
    }
    ?>
</table>
</body>
</html>
