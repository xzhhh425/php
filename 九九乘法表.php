<?php
echo "第一种" . "<br>";
for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        /*echo $j;
        echo "*";
        echo $i;
        echo "=";
        echo $i*$j;
        echo "&nbsp";*/

        /*简化后*/
        echo $j . "*" . $i . "=" . $i * $j . "&nbsp";
    }
    echo "<br>";
}
?>
    <P></P>
<?php
echo "第二种" . "<br>";
for ($i = 9; $i >= 0; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        if ($i * $j < 10)
            echo $j . "*" . $i . "=" . $i * $j . "&nbsp" . "&nbsp";
        else
            echo $j . "*" . $i . "=" . $i * $j . "&nbsp";
    }
    echo "<br>";
}
?>
    <P></P>
<?php
echo "第三种" . "<br>";
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9 - $i; $j++)
        echo "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp";
    for ($j = 1; $j <= $i; $j++) {
        if ($i * $j < 10)
            echo $j . "*" . $i . "=" . $i * $j . "&nbsp" . "&nbsp";
        else
            echo $j . "*" . $i . "=" . $i * $j . "&nbsp";
    }
    echo "<br>";
}
?>
    <P></P>
<?php
echo "第四种" . "<br>";
for ($i = 9; $i >= 1; $i--) {
    for ($j = 1; $j <= 9 - $i; $j++)
        echo "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp";
    for ($j = 1; $j <= $i; $j++) {
        if ($i * $j < 10)
            echo $j . "*" . $i . "=" . $i * $j . "&nbsp" . "&nbsp";
        else
            echo $j . "*" . $i . "=" . $i * $j . "&nbsp";
    }
    echo "<br>";
}
?>