<?php
$money = $_POST["tax_calcs"];
echo "<pre>";
print_r($_POST);
echo "<?pre>";
echo "输入值为：" . $money . "<br>";

echo "使用switch方法判定" . "<br>" . "<br>";
switch ($money) {
    case $money >= 80:
        echo "个人成绩为优秀";
        break;
    case $money >= 70:
        echo "个人成绩为良好";
        break;
    case $money >= 60:
        echo "个人成绩为及格";
        break;
    case $money >= 40:
        echo "个人成绩为不及格";
        break;
    case $money < 40:
        echo "个人成绩为差";
        break;
}
?>
