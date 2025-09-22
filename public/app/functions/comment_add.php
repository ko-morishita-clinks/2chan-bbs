<?php
$error_message = [];

if (isset($_POST['submitButton'])) {

  // お名前入力チェック
  if (empty($_POST['username'])) {
    $error_message['username'] = 'お名前を入力してください。';
  } else {
    $escaped['username'] = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $_SESSION["username"] = $escaped["username"];
  }

  // コメント入力チェック
  if (empty($_POST['body'])) {
    $error_message['body'] = 'コメントを入力してください。';
  } else {
    $escaped['body'] = htmlspecialchars($_POST['body'], ENT_QUOTES, 'UTF-8');
  }

  if (empty($error_message)) {
    //トランザクション開始
    $dbh->beginTransaction();

    try {
      $post_date = date("Y-m-d H:i:s");
      $sql = "INSERT INTO `comment` (`username`, `body`, `post_date`, `thread_id`) VALUES (:username, :body, :post_date, :thread_id)";
      $statement = $dbh->prepare($sql);

      $statement->bindParam(":username", $escaped["username"], PDO::PARAM_STR);
      $statement->bindParam(":body", $escaped["body"], PDO::PARAM_STR);
      $statement->bindParam(":post_date", $post_date, PDO::PARAM_STR);
      $statement->bindParam(":thread_id", $_POST['threadID'], PDO::PARAM_STR);

      $statement->execute();
      $dbh->commit();
    } catch (Exception $error) {
      $dbh->rollBack();
    }

  }

}

?>