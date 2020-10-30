<h1>五百年內的閏年</h1>
<?php
$year=date("Y");
$array=[];

for($i=0;$i<500;$i++){

    if(($year+$i)%4 == 0 && (($year+$i)%100 != 0  || (($year+$i)%400==0 && ($year+$i) % 3200 !=0))){

        $array[]=$year+$i;
        
    }   
}

echo "五百年內的閏年:<br>";
foreach($array as $year){
    echo $year ."<br>";
}

echo "一共有".count($array)."個閏年";

?>
<h1>天干地支</h1>
<?php

$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];
$match=[];
// foreach($sky as $i=> $s){   //$i key $s value

//   foreach($land as $j=> $l){
//     $match[1024+($i*10+$j)]=$s.$l;   //後重複值覆蓋，錯誤
//   }
// }

for($i=0;$i<60;$i++){
  $match[1024+$i]=$sky[$i%10].$land[$i%12];
}

print_r($match);
echo "<br>";
echo count($match);
echo "<br>";
echo $match[1077];

?>

<h1>陣列元素反轉</h1>
<?php
$a=[2,4,6,1,8];
echo "原陣列:";
echo "<pre>";
print_r($a);
echo"</pre>";

for($i=0;$i<ceil(count($a)/2);$i++){
  $tmp;
  $tmp=$a[$i];
  $a[$i]=$a[count($a)-1-$i];
  $a[count($a)-1-$i]=$tmp;
  
}

?>