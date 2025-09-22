<?php

$username = $_POST['username'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2ちゃんねる掲示板</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <header>
    <h1 class="title">2ちゃんねる掲示板</h1>
    <hr>
  </header>

  <!-- スレッドエリア -->
   <div class="threadWrapper">
      <div class="childWrapper">
        <div class="threadTitle">
          <span>【タイトル】</span>
          <h1>2ちゃんねる掲示板を作ってみた</h1>
        </div>
        <section>
          <article>
            <div class="wrapper">
              <div class="nameArea">
                <span>名前：</span>
                <p class="username">test name</p>
                <time>：2025/09/22 10:41</time>
              </div>
              <p class="comment">手書きのコメントです。</p>
            </div>
          </article>
        </section>
        <form method="POST" class="formWrapper">
          <div>
            <input type="submit" value="書き込む">
            <label>名前：</label>
            <input type="text" name="username">
            <div>
              <textarea class="commentTextArea" name="" id=""></textarea>
            </div>
          </div>
        </form>
      </div>
   </div>
</body>
</html>