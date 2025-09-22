<?php
$sql = "SELECT * FROM comment";
$statement = $dbh->prepare($sql);
$statement->execute();
$comment_array = $statement->fetchAll(PDO::FETCH_ASSOC);