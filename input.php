<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="home.php" class="button is-default">home画面</a></p><br>
<div class="has-text-centered">
<div level>
    <h1 class="is-size-3">新規登録</h1>
    <br>
<?php
echo  '<form action="input-fn.php" method="post">';
echo  '<table class="level-item">';
echo  '<tr><td>名前</td><td> </td><td>';
echo  '<input type="text"  maxlength="20" placeholder="麻生太郎"   name="name">';
echo  '</td></tr>';
echo  '<tr><td>作者</td><td> </td><td>';
echo  '<input type="text"  maxlength="20"  name="author">';
echo  '</td></tr>';
echo  '<tr><td>出版社</td><td> </td><td>';
echo  '<input type="text"  maxlength="20" name="com">';
echo  '</td></tr>';
echo  '</table><br/>';
echo  '<a href="home.php" class="button is- is-medium">戻る</a>';
echo '<span class="has-text-white">______________</span>';
echo  '<input type="submit" value="新規登録" class="button is-info is-medium">';
echo  '</form>';
?>
</div>

<?php require 'footer.php'; ?>