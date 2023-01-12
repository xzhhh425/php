<?php
$arr2 = array(
    array('0', 'asdfghj', '36', 'xzxad@qq.com', '56235641534'),
    array(),
    array(),
    array()
);
$count = array(
    "采购部" => array(
        array("NO." => 1, "name" => "张三", "age" => 25, "email" => "asdvfddfs@qq.com", "tel" => "5265845163487"),
        array("NO." => 2, "name" => "张三", "age" => 25, "email" => "asdvfddfs@qq.com", "tel" => "5265845163487"),
        array("NO." => 3, "name" => "张三", "age" => 25, "email" => "asdvfddfs@qq.com", "tel" => "5265845163487"),
        array("NO." => 4, "name" => "张三", "age" => 25, "email" => "asdvfddfs@qq.com", "tel" => "5265845163487"),
        array("NO." => 5, "name" => "张三", "age" => 25, "email" => "asdvfddfs@qq.com", "tel" => "5265845163487"),
        array("NO." => 6, "name" => "张三", "age" => 25, "email" => "asdvfddfs@qq.com", "tel" => "5265845163487")
    ),
    "销售部" => array(
        array("NO." => 1, "name" => "张三", "age" => 25, "email" => "asdvfddfs@qq.com", "tel" => "5265845163487", "card" => "54124678453468753468"),
        array("NO." => 2, "name" => "张三", "age" => 25, "email" => "asdvfddfs@qq.com", "tel" => "5265845163487", "card" => "54124678453468753468"),
        array("NO." => 3, "name" => "张三", "age" => 25, "email" => "asdvfddfs@qq.com", "tel" => "5265845163487", "card" => "54124678453468753468"),
        array("NO." => 4, "name" => "张三", "age" => 25, "email" => "asdvfddfs@qq.com", "tel" => "5265845163487", "card" => "54124678453468753468"),
        array("NO." => 5, "name" => "张三", "age" => 25, "email" => "asdvfddfs@qq.com", "tel" => "5265845163487", "card" => "54124678453468753468"),
        array("NO." => 6, "name" => "张三", "age" => 25, "email" => "asdvfddfs@qq.com", "tel" => "5265845163487", "card" => "54124678453468753468")
    ),
    /*"品管部" => array(
        array(),
        array(),
        array(),
        array(),
        array(),
        $arr2
    ),*/
    "品管部" => array(
        array(),
        array(),
        array(),
        array(),
        array('0', 'asdfghj', '36', 'xzxad@qq.com', '56235641534')
    )
);
echo "<pre>";
print_r($count);
echo "</pre>";

foreach ($count as $key => $arr2) {
    echo "<table border='1' width='600' align='center'>";
    echo "<caption><h2>";
    echo $key;
    echo "</h2></caption>";
    foreach ($arr2 as $col) {
        echo "<tr>";
        foreach ($col as $row) {
            echo "<td>";
            echo $row;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
