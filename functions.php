<?php
function getComments($row) {
	echo "<li class='comment'>";
	echo "<div class='aut'>".$row['author']."</div>";
	echo "<div class='comment-body'>".$row['comment']."</div>";
	echo "<div class='timestamp'>".$row['created_at']."</div>";
	echo "<a href='#comment_form' class='reply' id='".$row['id']."'>Reply</a>";
	$q = "SELECT * FROM threaded_comments WHERE parent_id = ".$row['id']."";
	include("config.php");
	$r = mysqli_query($db_con,$q);
	if(mysqli_num_rows($r)>0)
		{
		echo "<ul>";
		while($row = mysqli_fetch_assoc($r)) {
			getComments($row);
		}
		echo "</ul>";
		}
	echo "</li>";
}
?>