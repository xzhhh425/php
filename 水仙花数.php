<?php
echo "求100到999之间的水仙花数" . "<br>";
echo "第一种方法" . "<br>";
for ($i = 100; $i <= 999; $i++) {
    $a = floor($i / 100);
    $b = floor($i / 10) % 10;
    $c = floor($i % 10);
    if (pow($a, 3) + pow($b, 3) + pow($c, 3) == $i)
        echo $i . "<br>";

}
?>
    <p></p>

<?php
echo "求100到999之间的水仙花数" . "<br>";
echo "第二种方法" . "<br>";
for ($a = 1; $a <= 9; $a++) {
    for ($b = 0; $b <= 9; $b++) {
        for ($c = 0; $c <= 9; $c++) {
            if (pow($a, 3) + pow($b, 3) + pow($c, 3) == 100 * $a + 10 * $b + $c)
                echo 100 * $a + 10 * $b + $c . "<br>";
        }
    }
}
