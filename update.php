<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="home.php" class="button is-default">home画面</a></p><br>
<h1 class="has-text-centered is-size-3">本更新</h1><br>
<form action="update-fn.php"method="post"> 
<?php
$_SESSION['book']=['ID'=> $_POST['ID']];
$pdo=new PDO($connect,user,pass);
$sql=$pdo->prepare('select * from book where ID=?');
$sql->execute([$_POST['ID']]);
foreach ($sql as $row){
echo  '<p class="has-text-centered">名前　　<input type="text" name="name" value="',$row['name'],'"></p>';
echo  '<p class="has-text-centered">作者　　<input type="text" name="author" value="',$row['author'],'"></p>';
echo  '<p class="has-text-centered">出版社　<input type="text" name="com" value="',$row['com'],'"></p>';
}
?>
<nac class="level">
<b class="level-item">
<a href="book.php" class="button is-medium">戻る</a>
<p class="has-text-white">______________</p>
<button type="submit" class="button is-info is-medium">更新</button>
</b>
</nac>
</form>
<?php require 'footer.php'; ?>