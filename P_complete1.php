<?php

mb_internal_encoding("UTF8");

$pdo = new PDO("mysql:dbname=sampledb;host=localhost;","root","root");

$pdo->exec("insert into portfolio(myouzi,name,post,jusyo,phone,mail,requ,comments)
values('".$_POST['myouzi']."','".$_POST['name']."','".$_POST['post']."','".$_POST['jusyo']."'
,'".$_POST['phone']."','".$_POST['mail']."','".$_POST['requ']."','".$_POST['comments']."');");

 ?>

<!DOCTYPE HTML>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <meta name="description" content="お問い合わせ完了画面">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="P_completeM.css"/>
  <link rel="stylesheet" type="text/css" href="P_completeT.css"/>
  <link rel="stylesheet" type="text/css" href="P_complete.css"/>
  <title>お問い合わせ完了画面</title>
 </head>
 <body>

   <header>
     <section>
      <form id="form">
       <label>EcoEco</label>
         <select name="select">
           <option value="" selected>Language</option>
           <option value="P_form.html">日本語</option>
           <option value="P_form_En.html">English</option>
         </select>
         <script src="P_form.js"></script>
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
         <li><a href="#">お問い合わせについて</a></li>
         <li><a href="#">アクセス</a></li>
       </ul>
     </nav>

     <script src="P_mobile_menu.js"></script>

   <main>
     <div class="messa">
       <h1>お問い合わせありがとうございます。</h1>
       <p>内容を確認次第、担当の者からご連絡いたします。</p>
     </div>
     <div class="top">
       <p><a href="P_form.html">トップページに戻る</a></p>
     </div>
   </main>

   <footer>
     <span id="pageTop"><a href="#"><img src="images/top3.png"/></a></span>
     <script src="P_PageTop.js"></script>
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
