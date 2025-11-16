<?php
include "db.php";
$sql = "SELECT posts.*, users.name AS author FROM posts JOIN users ON posts.author_id = users.id ORDER BY posts.id DESC";
$res = mysqli_query($conn, $sql);
$data = [];
while ($row = mysqli_fetch_assoc($res)) {
    $data[] = $row;
}
echo json_encode($data);
?>
