<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>學生資料輸入</title>
</head>

<body>
<pre>
建立輸入畫面
建立學生資料陣列
輸入學生班級座號，顯示學生詳細資料
</pre>

<?php
$student=[
  '01'=>[
    '姓名'=>'小明',
    '國文'=>'60',
    '英文'=>'70'
  ],
  '02'=>[
    '姓名'=>'中明',
    '國文'=>'80',
    '英文'=>'90'
  ],
  '03'=>[
    '姓名'=>'大明',
    '國文'=>'100',
    '英文'=>'60'
  ],
  '04'=>[
    '姓名'=>'小王',
    '國文'=>'70',
    '英文'=>'80'
  ],
  '05'=>[
    '姓名'=>'中王',
    '國文'=>'90',
    '英文'=>'100'
  ],
  '05'=>[
    '姓名'=>'大王',
    '國文'=>'90',
    '英文'=>'80'
  ]
];

if(!empty($_POST['num'])){
  // echo "你查詢的學生為{$_POST['num']}號";
  echo "你查詢的學生為".$_POST['num']."號<br>";
  echo $student[$_POST['num']]['姓名']."<br>";
  echo "國文成績:".$student[$_POST['num']]['國文']."分<br>";
  echo "英文成績:".$student[$_POST['num']]['英文']."分<br>";
}
else{

?>

<form action="student.php" method="post">
  <h5>請輸入座號查詢學生資料</h5>
  <input type="text" name="num">
  <input type="submit" value="查詢">
</form>

<?php
    }
?>

<div><a href="student.php">重新查詢</a></div>

</body>
</html>