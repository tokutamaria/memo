<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php
    try {
        $db = new PDO('mysql:dbname=mydb;localhost=3306;charset=utf8','root','root');

       $db -> exec('INSERT INTO memos SET memo="' . $_POST['memo'] .  '", created_at=NOW()');
    } catch(PDOException $e) {
        echo 'DB接続エラー:' . $e->getMessage();
    }
    ?>

</pre>
</main>
</body>
</html>
