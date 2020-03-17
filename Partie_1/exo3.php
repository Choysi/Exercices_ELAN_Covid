<?php
$str = " Notre formation DL commence aujourdhui ";
echo $str;
echo "<br>";
$Str = preg_replace('/\baujourdhui\b/u', 'demain', $str);
echo $Str;
