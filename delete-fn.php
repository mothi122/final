<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php
    $pdo=new PDO($connect,user,pass);
    $sql=$pdo->prepare(
        'delete from book where ID=?');
    $sql->execute([$_POST['ID']]);   
echo '<h1 class="has-text-centered is-size-3">削除完了</h1><br>';
echo '<br><br>';
echo '<p class="has-text-centered">本を削除しました。</p><br>';
echo '<br><br>';
echo '<c class="level-item">';
echo '<a href="book.php">本一覧へ</a>';
echo '</c>';
?>
<?php require 'footer.php'; ?>