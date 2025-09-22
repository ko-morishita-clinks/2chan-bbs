<?php
$comment_array = [];
$sql = "SELECT * FROM comment";
$statement = $dbh->prepare($sql);
$statement->execute();
$comment_array = $statement;