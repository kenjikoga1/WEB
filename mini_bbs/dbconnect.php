<?php
try {
  $db = new PDO('mysql:dbname=mini_bbs;host=127.0.0.1;charset=UTF8','root','root');
  //PDO(mysql:dbname=データベースネーム;ホスト;charset=UTF-8,'ユーザー名','パスワード');
} catch (PDOException $e) {
    print('接続エラー:'.$e->getMessage());
}

 ?>
