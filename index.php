<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>MiniBlog</title>
<style>
body{font-family:Arial;background:#f2f2f2;margin:0;padding:20px}
.box{background:white;padding:20px;border-radius:10px;max-width:700px;margin:20px auto;box-shadow:0 4px 10px rgba(0,0,0,0.1)}
.title{font-size:24px;font-weight:bold;color:#333}
.meta{color:#777;font-size:14px;margin-bottom:10px}
.content{font-size:16px;color:#444;line-height:1.5}
.header{text-align:center;font-size:32px;font-weight:bold;margin-bottom:20px;color:#444}
</style>
</head>
<body>

<div class="header">Mini Blog</div>

<?php
$q = "SELECT posts.*, users.name AS author FROM posts JOIN users ON posts.author_id = users.id ORDER BY posts.id DESC";
$r = mysqli_query($conn,$q);
while($p = mysqli_fetch_assoc($r)){
?>
<div class="box">
    <div class="title"><?= $p['title'] ?></div>
    <div class="meta">By <?= $p['author'] ?> • <?= $p['created_at'] ?></div>
    <div class="content"><?= $p['content'] ?></div>
</div>
<?php } ?>

</body>
</html>
