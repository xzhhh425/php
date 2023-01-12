<?php
/*打印三个图形
第一个
*
**
***
****
*****

第二个
*
***
*****
*******
*********

第三个
    *
   ***
  *****
 *******
**********/
?>
<?php
echo "第一个" . "<br>";
for ($i = 0; $i <= 5; $i++) {
    for ($q = 0; $q <= $i; $q++)
        echo "*";
    echo "<br>";
}
?>
<P></P>
<?php
echo "第二个" . "<br>";
for ($i = 0; $i <= 5; $i++) {
    for ($q = 1; $q <= $i * 2 - 1; $q++)
        echo "*";
    echo "<br>";
}
?>
<P></P>
<?php
define("nub", 9);//创建常量nub，把20赋值给常量nub
echo "第三个" . "<br>";
for ($i = 1; $i <= nub; $i++) {
    for ($a = 1; $a <= nub - $i; $a++)
        echo "&nbsp";
    for ($q = 1; $q <= $i * 2 - 1; $q++)
        echo "*";
    echo "<br>";
}
?>
<P></P>
<?php
define("star_num", 10);

for ($i = 1; $i <= star_num; $i++) {
    for ($j = 1; $j <= star_num - $i; $j++)
        echo "&nbsp";
    for ($j = 1; $j <= 2 * $i - 1; $j++)
        echo "*";
    echo "<br>";
}
for ($i = star_num - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= star_num - $i; $j++)
        echo "&nbsp";
    for ($j = 1; $j <= 2 * $i - 1; $j++)
        echo "*";
    echo "<br>";
}
?>

