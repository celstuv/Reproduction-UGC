<?php
if(isset($_GET['type'])) {
	include('./app/models/article_by_type.php');
}	else if (isset($_GET['search'])) {
	include('./app/models/get_search.php');
}	else {
	include('./app/models/articles.php');
}
  	include('./app/views/articles/index.php');

  $mysqli->close();
