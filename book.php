<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="home.php" class="button is-default">home画面</a></p><br>
<h1 class="has-text-centered">本一覧</h1><br>
<div  class="level-item has-text-centered">
<?php
$pdo=new PDO($connect,user,pass);
echo '<table border="1" class="level-item">';
echo '<tr><th>名前</th><th>作者</th><th>出版社</th><th>更新</th><th>削除</th></tr>';
$sql=$pdo->query('select * from book');
foreach ($sql as $row){
echo '<tr>';
echo '<td>',$row['name'],'</td>';
echo '<td>',$row['author'],'</td>';
echo '<td>',$row['com'],'</td>';
echo '<td>';
echo '<form action="update.php"method="post">';
echo '<input type="hidden" name="ID" value="',$row['ID'],'">';
echo '<button type="submit">更新</button>';
echo '</form>';
echo '</td>';
echo '<td>';
echo '<form action="delete.php"method="post">';
echo '<input type="hidden" name="ID" value="',$row['ID'],'">';
echo '<button type="submit">削除</button>';
echo '</form>';
echo '</td>';
echo '</tr>';
}
echo '</table>';
?>
</div>
<?php require 'footer.php'; ?>