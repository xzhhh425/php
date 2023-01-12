<?php
echo "使用switch方法：" . "<br>";
$score = 10;
echo $score;
switch ($score / 10) {
    case 10:
        echo "优秀";
        break;
    case 9:
        echo "优秀";
        break;
    case 8:
        echo "优秀";
        break;
    case 7:
        echo "良";
        break;
    case 6:
        echo "及格";
        break;
    case 5:
        echo "不及格";
        break;
    case 4:
        echo "不及格";
        break;
    case 3:
        echo "差";
        break;
    case 2:
        echo "差";
        break;
    case 1:
        echo "差";
        break;
    case 0:
        echo "差";
        break;
}
