<?php
$str='aaddw1123';
$s=strlen($str);
echo str_repeat("*",$s);

echo "<br>";
echo str_repeat("*",mb_strlen('aaddw1123'));

echo "<hr>";
?>


<?php
$str='this,is,a,book';
$s=explode(',',$str);
echo print_r($s);

echo "<br>";
echo implode(" ",$s);

?>