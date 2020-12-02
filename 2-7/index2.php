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

echo '<br>';
echo プルリクエスト（マージリクエスト）とは;
echo '<br>';
echo 開発者のローカルリポジトリでの変更を他の開発者に通知する機能であり、;
echo '<br>';
echo 一人で作ると気がつかないコードの指摘やバグや記述ミスの発見ができ、コードの品質を高めます。;
echo '<br>';
echo 導入はGitHubにブランチをプッシュ→開発者がブランチからプルリクエストを作成する;
echo '<br>';
echo →レビュワーがコードをレビューする→ブランチをマージする;
echo '<br>';
echo  ギットflowとは、Gitの機能であるブランチを活用したGitの開発手法でもあり、ツールの名前でもあります。;
echo '<br>';
echo 複数人による長期の開発をおこなう場合、;
echo '<br>';
echo 運用ルールを決めずにGitを採用してしまうと、コンフリクトが頻繁に起こったりマージのミスが発生したりするため;
echo '<br>';
echo それぞれのブランチを明確に定義し、複数人での開発時に混乱することを防ぎます。;
echo '<br>';
echo cronとは;
echo '<br>';
echo 多くのUNIX系OSで標準的に利用される常駐プログラム（デーモン）の一種で、;
echo '<br>';
echo 利用者の設定したスケジュールに従って指定されたプログラムを定期的に起動してくれるもの。;
?>

</body>
</html>
