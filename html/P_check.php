<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="EcoEcoのオフィシャルサイトへようこそ!
  こちらはお問い合わせ内容確認ページです。">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../check_css/P_checkM.css"/>
  <link rel="stylesheet" type="text/css" href="../check_css/P_checkM2.css"/>
  <link rel="stylesheet" type="text/css" href="../check_css/P_checkT.css"/>
  <link rel="stylesheet" type="text/css" href="../check_css/P_checkP.css"/>
  <title>お問い合わせ内容確認画面</title>
</head>
<body>
  <header>

    <section>
     <form id="form">
      <label>EcoEco</label>
        <select name="select">
          <option value="" selected>Language</option>
          <option value="P_form.html">日本語</option>
          <option value="#">English</option>
        </select>
        <script src="../js/P_form.js"></script>
     </form>
    </section>

    <div class="title">
      <h1>EcoEco</h1>
    </div>
    <nav>
      <div class="menubtn">MENU</div>
      <ul class="navi">
        <li><a href="#">トップ</a></li>
        <li><a href="#">EcoEcoとは</a></li>
        <li><a href="#">ご利用ガイド</a></li>
        <li><a href="#">営業時間・料金</a></li>
        <li><a href="P_form.html">お問い合わせについて</a></li>
        <li><a href="#">アクセス</a></li>
     </ul>
    </nav>

      <script src="../js/P_mobile_menu.js"></script>

  </header>

  <main>
    <h2>お問い合わせ内容の確認</h2>
    <div class="check">
      <p>お問い合わせ内容は以下でお間違いないですか?
        <br>よろしければ、下記の「送信ボタン」を押してください。</p>
    </div>

  <section class="form">
    <dl>
  <section class="form2">
  <div class="name" id="name">
    <dt><label>お名前</label></dt>
      <dd><span><?php echo(htmlspecialchars($_POST['myouzi']));?></span>
      <span><?php echo $_POST['name'];?></span></dd>
  </div>
  <div class="yubin" id="yubin">
    <dt><label>郵便番号</label></dt>
      <dd><span><?php echo(htmlspecialchars($_POST['post']));?></span></dd>
  </div>
  <div class="jusyo" id="jusyo">
    <dt><label>住所</label></dt>
      <dd><span><?php echo(htmlspecialchars($_POST['jusyo']));?></span></dd>
  </div>
  <div class="phone" id="phone">
    <dt><label>電話番号</label></dt>
      <dd><span><?php echo(htmlspecialchars($_POST['phone']));?></span></dd>
  </div>
  <div class="mail" id="mail">
    <dt><label>メールアドレス</label></dt>
      <dd><span><?php echo(htmlspecialchars($_POST['mail']));?></span></dd>
  </div>
  <div class="repu" id="repu">
    <dt><label>件名</label></dt>
    <dd><span><?php
    if ($_POST['requ'] === "1") {
      echo 'EcoEcoの営業案内について';
    } else if ($_POST['requ'] === "2") {
      echo 'ボランティア活動について';
    } else if ($_POST['requ'] === "3") {
      echo '人材募集について';
    } else if ($_POST['requ'] === "4") {
      echo 'その他';
    } else {
      echo '件名が選ばれていません。';
    }
     ?>
   </span></dd>
  </div>
  <div class="comments" id="comments">
    <dt><label>お問い合わせ内容</label></dt>
      <dd><span><?php echo(htmlspecialchars($_POST['comments']));?></span></dd>
  </div>
</section>
 </dl>

<div id ="btn1">
 <form action="P_complete1.php" method="post">
   <input type="submit" class="btn1" vlaue="送信する"/>
   <input type="hidden" value="<?php echo $_POST['myouzi'];?>" name="myouzi"/>
   <input type="hidden" value="<?php echo $_POST['name'];?>" name="name"/>
   <input type="hidden" value="<?php echo $_POST['post'];?>" name="post"/>
   <input type="hidden" value="<?php echo $_POST['jusyo'];?>" name="jusyo"/>
   <input type="hidden" value="<?php echo $_POST['phone'];?>" name="phone" />
   <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail"/>
   <input type="hidden" value="<?php echo $_POST['requ'];?>" name="requ"/>
   <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments"/>
 </form>
</div>

<div id="btn2">
 <form action="P_form.html">
   <input type="submit" class="btn2" value="前の画面に戻る"/>
 </form>
</div>
</section>
<span id="pageTop"><a href="#"><img src="images/top3.png"/></a></span>
<script src="../js/P_PageTop.js"></script>
</main>

<footer>
  <span id="pageTop"><a href="#"><img src="images/top3.png"/></a></span>
  <script src="../js/P_PageTop.js"></script>
  <div class="sub_info">
   <div class="sub_info2">
    <p><a href="#">EcoEco</a></p>
        <ul class="info5">
          <li><a href="#">企業情報</a></li>
          <li><a href="#">採用情報</a></li>
          <li><a href="#">スポンサー企業</a></li>
          <li><a href="#">報道関係者の方へ</a></li>
        </ul>
        <ul class="info6">
          <li><a href="#">活動報告</a></li>
          <li><a href="#">動画チャンネル</a></li>
          <li><a href="#">世界のEco活動</a></li>
        </ul>
      </div>
        <p id="All"><small>EcoEco 2020 All Rights Researved</small></p>
     </div>
  </footer>

</body>
</html>
