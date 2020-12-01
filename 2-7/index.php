<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>配列、連想配列</title>
</head>
<body>
<?php
$color = ["red" => "赤", "blue" => "青", "green" => "緑"];

echo $color["red"];
echo $color["blue"];
echo $color["green"];
var_dump($color);

$color = ["red" => "赤", "blue" => "青", "green" => "緑", "yellow"=>"黄色"];

echo $color["red"];
echo $color["blue"];
echo $color["green"];
echo $color["yellow"];
var_dump($color);
?>

</body>
</html>
