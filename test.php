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
echo "<hr>";
?>


<?php
// $a=strtotime("2021-10-15");
// $b=strtotime("now");
$birthday=strtotime("2021-10-15");
$today=date("Y-m-d");

// echo $b;
// echo "<br>";
// echo $a;
// echo "<br>";
// echo $today;
// echo "<br>";

// $r=$a-$b;
// echo $r;
// echo "<br>";
// $d=$r/60/60/24;
// echo $d."天";
// echo "<br>";

echo floor((strtotime($today)-strtotime($birthday))/(60*60*24));
echo "<br>";
echo floor(abs(strtotime($today)-strtotime($birthday))/(60*60*24));

if(strtotime($today)>strtotime($birthday)){
  $gap=strtotime($today)-strtotime($birthday);
}
else{
  $gap=strtotime($birthday)-strtotime($today);
}

echo "<br>".$gap/86400;

?>