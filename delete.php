<?php require 'db-connect.php'; ?>
<?php require 'header.php'?>
<h1 class="has-text-centered is-size-3">削除確認</h1><br>
<?php
$pdo=new PDO($connect,user,pass);
$sql=$pdo->prepare('select * from book where ID=?');
$sql->execute([$_POST['ID']]);
foreach ($sql as $row){
echo '<p class="has-text-centered">名前　　',$row['name'],'</p>';
echo '<br>';
echo '<p class="has-text-centered">作者　　',$row['author'],'</p>';
echo '<br>';
echo '<p class="has-text-centered">出版社　',$row['com'],'</p>';
echo '<br>';
}
?>
<?php
echo '<p class="has-text-danger has-text-centered">削除してもよろしいですか</p><br>';
echo '<nac class="level">';
echo '<b class="level-item">';
echo '<a href="book.php" class="button is-medium">戻る</a>';
echo '<p class="has-text-white">______________</p>';
echo '<form action="delete-fn.php"method="post">';
echo '<input type="hidden" name="ID" value="',$_POST['ID'],'">';
echo '<button type="submit" class="button is-info is-medium">削除</button>';
echo '</form>';
echo '</b>';
echo '</nac>';
?>
<?php require 'footer.php'; ?>