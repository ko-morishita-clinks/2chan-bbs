<?php
$thread_array = [];
$sql = "SELECT * FROM thread";
$statement = $dbh->prepare($sql);
$statement->execute();
$thread_array = $statement;