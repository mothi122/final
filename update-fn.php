<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="home.php" class="button is-default">home画面</a></p><br>
<h1 class="has-text-centered is-size-3">更新完了</h1><br>
    
<?php
$pdo=new PDO($connect,user,pass);
    $sql=$pdo->prepare(
        'update book set name=?,author=?,com=? where ID=?');
        $sql->execute([$_POST['name'],$_POST['author'],$_POST['com'],$_SESSION['book']['ID']]);
        unset($_SESSION['book']);
        ?>
        <p class="has-text-centered"><a href="book.php" class="button is-medium">本一覧へ</a></p>
<?php require 'footer.php'; ?>

