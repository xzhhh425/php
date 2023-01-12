<?php
echo "公鸡每只5元" . "<br>" . "母鸡每只3元" . "<br>" . "小鸡每三只1元" . "<br>";
echo "<br>";
echo "思路：三重循环求解" . "<br>";
echo "<br>";
for ($cook = 0; $cook <= 20; $cook++) {
    for ($hen = 0; $hen <= 33; $hen++) {
        for ($chick = 0; $chick <= 300; $chick += 3) {
            if ($cook * 5 + $hen * 3 + $chick / 3 == 100 && $cook + $hen + $chick == 100)
                echo $cook . "&nbsp" . $hen . "&nbsp" . $chick . "&nbsp" . "<br>";
        }
    }
}
?>