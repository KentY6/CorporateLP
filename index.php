<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>HOME LIFE</title>
</head>
<body>
    <!-- ヘッダー -->
    <?php include 'header.php'; ?>

    <!-- ホーム画面 -->
    <div id="home">
        <?php include 'home.php'; ?>
    </div>

    <!-- 会社概要画面 -->
    <div id="about">
        <?php include 'about.php'; ?>
    </div>
    
    <!-- Case画面 -->
    <div id="case">
        <?php include 'case.php'; ?>
    </div>

    <!-- Service画面 -->
    <div id="service">
        <?php include 'service.php'; ?>
    </div>

    <!-- FAQ画面 -->
    <div id="faq">
        <?php include 'faq.php'; ?>
    </div>

    <!-- お問い合わせ画面 -->
    <div id="contactUs">
        <?php include 'contactUs.php'; ?>
    </div>

    <!-- フッター -->
    <?php include 'footer.php'; ?>
</body>
</html>