<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Risaki's Portfolio</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/base.css">
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
  <!-- <script src="https://kit.fontawesome.com/b466a3db98.js" crossorigin="anonymous"></script> -->
  <link rel="icon" href="../favicon.ico">
  <link rel="apple-touch-ico" href="../apple-touch-icon.png" sizes="180x180">
</head>

<body>
<div id="content">
    <main id="main">
      <section id="kv">
        <div id="kv-img" class="to-down trans">
          <img src="../images/name.png" alt="">
        </div>
      </section>
      <section>
        <div id="kv-txt" class="to-up trans">
          <p><strong>Hello!!</strong> 渡辺里咲と申します。「里咲」と書いて「りさき」と読みますが、学生時代はよく名前を読み間違えられて、「りさ」と呼ばれておりました。</strong></p>
        </div>
      </section>
      
      <section id="myPortfolio" class="sec">
        <div class="ta-center inner">
        <h1 class="section-ttl to-down trans">My Portfolio</h1>
        <ul class="myPortfolio-list">
          <li class="myPortfolio-list_item">
            <div class="myPortfolio-list_img trans to-up">
              <a href="https://risaki-apple.github.io/portfolio.cafe/"><img src="../images/cafe.png" class="img"></a>
            </div>
            <div class="myPortfolio-list_txt trans to-up">
              <p class="catch">Cafe</p>
              <p class="excerpt">飲食店のサイトを参考にカフェサイトを作成しました。</p>
            </div>
          </li>
          <li class="myPortfolio-list_item flex-reverse">
            <div class="myPortfolio-list_img trans to-up">
              <a href="https://risaki-apple.github.io/portfolio.pancake/"><img src="../images/pancake.png" class="img"></a>
            </div>
            <div class="myPortfolio-list_txt trans to-up">
              <p class="catch">Pancake</p>
              <p class="excerpt">チーズケーキ屋のサイトを参考にパンケーキ屋のサイトを作成いたしました。</p>
            </div>
          </li>
          <li class="myPortfolio-list_item flex-reverse">
            <div class="myPortfolio-list_img trans to-up">
              <a href="#kv"><img src="../images/portfolio.png" class="img"></a>
            </div>
            <div class="myPortfolio-list_txt trans to-up">
              <p class="catch">Risaki's Portfolio</p>
              <p class="excerpt">このWebページです。</p>
            </div>
          </li>
        </ul>
      </section>

      <section id="myVision" class="sec">
        <div class="ta-center inner">
          <h1 class="section-ttl to-down trans">My Vision</h1>
          <h2 class="ov-h2 ta-center to-up trans">日々キャッチアップを欠かさず<br><strong>需要のあるエンジニアに</strong></h2>
          <ul class="ov-list">
            <li class="ov-list_item to-up trans">
              <p class="main">実務経験を積み信頼されるエンジニアに</p><br>
              <p class="sub">まずは、しっかりと実務経験を積み、経験者として信頼のあるエンジニアになる</p>
            </li>
            <li class="ov-list_item to-up trans">
              <p class="main">見る人をワクワクさせるWebページを</p><br>
              <p class="sub">複雑なアニメーションを使いこなし、見る人の印象に深く残るものを提供できるエンジニアになる</p>
            </li>
            <li class="ov-list_item to-up trans">
              <p class="main">デザイナーとしてもエンジニアとしても活躍できる人材に</p><br>
              <p class="sub">デザインを考えたりすることも大好きなので、ゆくゆくは、ありきたりなデザインでなく、目を引くようなサイトのデザインからコーディングまで全て一貫して務められるエンジニアになる</p>
            </li>
          </ul>
      </section>

      <section id="contactMe" class="sec">
        <div class="inner ta-center">
          <h1 class="section-ttl to-down trans">Contact Me</h1>
          <div class="contactMe_catch to-up trans">
            <p>〜ご連絡はこちらから〜</p>
          </div>
          <?php include "contact.php" ?>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="footer-inner">
        <p class="footer-logo"><img src="../images/name.png"></p>
        <nav id="footer-nav">
          <ul class="fnav">
            <li class="fnav_item"><a href="#kv" class="fnav_link">Top</a></li>
            <li class="fnav_item"><a href="#myPortfolio" class="fnav_link">My Portfolio</a></li>
            <li class="fnav_item"><a href="#myVision" class="fnav_link">My Vision</a></li>
            <li class="fnav_item"><a href="#contactMe" class="fnav_link">Contact Me</a></li>
          </ul>
        </nav>
      </div>
    </footer>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
