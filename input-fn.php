<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="home.php" class="button is-default">home画面</a></p><br>
    <?php
        $pdo=new PDO($connect,user,pass);
        $sql=$pdo->prepare("insert into book values(null,?,?,?)");
        $sql->execute([
            $_POST['name'],$_POST['author'],$_POST['com']
        ]);
    ?>
    <div class="has-text-centered">
    <h1 class="is-size-3">登録完了</h1>
    <p class="has-text-centered"><a href="book.php" class="button is-medium">本一覧へ</a></p>
</div>
<?php require 'footer.php'; ?>