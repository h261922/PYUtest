<h1>字串常用函式</h1>
<h3>substr/mb_substr</h3>

<?php
$str="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit ducimus veritatis saepe maxime adipisci, sequi blanditiis fugit debitis rerum officiis eaque et magnam consequuntur beatae facilis earum perspiciatis. Provident, similique.";

$substr=mb_substr($str,0,10);   //字串,起始,數量(預設到尾巴)
echo $substr;

$substr_from_tail=mb_substr($str,-10);   //由後開始找
echo $substr_from_tail;

echo "<hr>";
?>

<h1>去頭尾空白</h1>
<h3>trim()</h3>
<?php
echo "<hr>";
?>

<h1>重複字元</h1>
<h3>str_repeat()</h3>

<?php

echo str_repeat('mark',10);
echo "<hr>";
?>

<h1>字串取代</h1>
<h3>str_replace()</h3>

<?php

$str_replace='mark';
$result=str_replace('Lorem',$str_replace,$str);   //查找值,替換值,字串

echo $str;
echo "<br>";
echo $result;
echo "<hr>";
?>


<h1>分割字串</h1>
<h3>explode()</h3>

<?php
$str_array=explode(' ',$str);

echo "<pre>";
print_r($str_array);
echo "</pre>";

?>

<h1>尋找字串位置</h1>
<h3>strpos()</h3>

<?php
$target='consectetur';
echo strpos($str,$target);   //字串,查找字串

?>

<h1>字串長度</h1>
<h3>strlen()</h3>

<?php
$mb_str='今天的天氣很good';
echo strlen($mb_str);
echo "<br>";
echo mb_strlen($mb_str);
echo "<br>";
echo substr($mb_str,0,4);   //使用substr非長度3倍數會出現亂碼

?>