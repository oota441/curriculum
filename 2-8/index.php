<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>foreach</title>
</head>
<body>

<?php
$fruits = ["apple" => "といったらりんご", "orange" => "と言ったらみかん", "peach" => "と言ったらもも"];

foreach ($fruits as $key => $value) {
    echo $key;
    echo $value;
}

echo '<br>';
echo トランザクションとは;
echo '<br>';
echo 取引記録などの意味の他に、ソフトウェアの処理方式の一つで、;
echo '<br>';
echo 互いに関連・依存する複数の処理をまとめ、一体不可分の処理単位として扱うことを指す場合が多い。;
echo '<br>';
echo 排他ロックとは、データベースシステムなどで記憶領域への同時;
echo '<br>';
echo アクセスを制限するロック機構の一つで、他の実行主体によるアクセスを完全に禁止するもの。;
echo '<br>';
echo チューニングとは情報システムやコンピュータ、;
echo '<br>';
echo ソフトウェアなどの設定や構成を調整し、目標の状態に近づけたり、性能を最大限引き出し;
echo '<br>';
echo たりする作業;
?>
</body>
</html>
