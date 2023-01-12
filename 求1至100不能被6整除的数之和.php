<?php
$r = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 6 != 0)
        $r += $i;
}
echo $r;
