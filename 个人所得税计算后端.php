<?php
$money = $_POST["tax_calc"];
$number = $_POST["tac"];
echo "<pre>";
print_r($_POST);
echo "<?pre>";
echo "输入值为：" . $money . "<br>";

echo "使用switch方法判定" . "<br>";
switch ($money) {
    case $money >= 50000:
        echo "应收个人所得税为：" . ($money - 50000) * 0.20;
        break;
    case $money >= 40000:
        echo "应收个人所得税为：" . ($money - 40000) * 0.15;
        break;
    case $money >= 30000:
        echo "应收个人所得税为：" . ($money - 30000) * 0.10;
        break;
    case $money >= 20000:
        echo "应收个人所得税为：" . ($money - 20000) * 0.05;
        break;
    case $money >= 10000:
        echo "应收个人所得税为：" . ($money - 10000) * 0.03;
        break;
    case $money < 10000:
        echo "应收个人所得税为：" . "0";
        break;
}
?>
