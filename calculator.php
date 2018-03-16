<?php
$count1 = $_GET['count1'];
$count2 = $_GET['count2'];
$count3 = $_GET['count3'];

echo $count1 ."&nbsp;". $count3 ."&nbsp;". $count2 ."&nbsp;". '='."&nbsp;";

switch ($count3) {
    case '+':
        echo $count1 + $count2;
        break;
    case '-':
        echo $count1 - $count2;
        break;
    case '*':
        echo $count1 * $count2;
        break;
    case '/':
        echo $count1 / $count2;
        break;
}
?>
