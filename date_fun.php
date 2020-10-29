<h1>日期函數</h1>
<h3>date()</h3>

<?php

echo date("Y-m-d");
echo "<br>";
echo date("y-m-d");
echo "<br>";
echo date("Y-M-d");
echo "<br>";
echo date("Y-m-D");
echo "<br>";

?>

<h4>strtotime()</h4>   //將英文格式轉成日期秒
<?php
echo strtotime("2020-10-29");
echo "<br>";
echo strtotime("2020-10-29 10:51:23");
echo "<br>";
echo strtotime("+1 days");
echo "<br>";
echo strtotime("+1 month");
echo "<br>";
echo date("Y-m-d H:i:s l",strtotime("+1 year"));

echo "<br>";

echo date("Y年m月d日",strtotime("2020-10-29 +3 days"));  
?>