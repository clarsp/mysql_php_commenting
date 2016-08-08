<?php
include("config.php");
$author = $_POST['name'];
$comment_body = $_POST['comment_body'];
$parent_id = $_POST['parent_id'];
$sql = "INSERT INTO threaded_comments (author, comment, parent_id) VALUES ('$author', '$comment_body', $parent_id)";
echo $sql;
if(mysqli_query($db_con,$sql)){
	header("location:index.php");
}
else {
echo "Comment cannot be posted. Please try again.";
}
?>