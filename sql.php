<?php
$dsn = 'pgsql:dbname=TEST;host=pgsql;port=5432';
$user = 'postgres';
$pass = 'example';

try{
  // db に接続する
  $dbh = new PDOs($dsn, $user, $pass);

  // ここでクエリを実行する

  //DBを切断する
  $dbh = null;

} catch (PDOException $e){
  // 接続エラーした場合
  print "DBエラー: " . $e->getMessage();
  die();
}

 ?>
