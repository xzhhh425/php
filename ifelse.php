<input type="number" id="score" class="score" maxlength="4" label="1">
<br>
<?php
echo " 成绩：";
echo $score = 50;
echo "&nbsp";
if ($score >= 90)
    echo "优秀";
if ($score >= 80 and $score < 90)
    echo "良好";
if ($score >= 70 and $score < 80)
    echo "中等";
if ($score >= 60 and $score < 70)
    echo "及格";
if ($score >= 40 and $score < 60)
    echo "不及格";
if ($score < 40)
    echo "差";
?>