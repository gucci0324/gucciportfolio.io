<!DOCTYPE html>
  <html lang="ja">
    <head>
      <meta charset="utf-8">
      <title>My Portfolio</title>
      <meta name="description" content="川口拓夢のポートフォリオ">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <link rel="stylesheet" href="../css/stylesheet.css">
      <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&family=Anton&display=swap" rel="stylesheet">
      <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </head>

    <body>
      <div class="main">
        <div class="thanks-message">お問い合わせいただきありがとうございます</div>
        <div class="display-contact">
          <div class="form-title">入力内容</div>

          <div class="form-item">■ 氏名</div>
            <?php echo $_POST["name"]?>
          <div class="form-item">■ メールアドレス</div>
            <?php echo $_POST["mail"]?>
          <div class="form-item">■ お問い合わせ内容</div>
            <?php echo $_POST["detail"]?>

          </div>
          <input class="btn admit" type="submit" value="送信する">

      </div>
      <footer>
        <div class="footer-write">
            <p>©︎ Takumu Kawaguchi 2020</p>
        </div>
  
        <div class="footer-sns">
            <a href="https://www.instagram.com/l2_gucci/"><i class="insta fab fa-instagram"></i></a>
            <a href="https://twitter.com/worldwide_0324"><i class="twitter fab fa-twitter"></i></a>
        </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </body>
  </html>
