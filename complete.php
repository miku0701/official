<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.php");
	exit();
}

//メールの日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

//送信先アドレス
$to = "mikufor16@gmail.com";
//メール件名
$subject = "下記の内容でお問い合わせをいただきました。";
//メッセージ本文を視覚的に見やすく格納（ヒアドキュメント）
$message = <<< EOM
【 お名前 】
{$_POST["name"]}

【 メール 】
{$_POST["email"]}

【 お問い合わせ理由 】
{$_POST["reason"]}

【 お問い合わせ内容 】
{$_POST["contact_body"]}
EOM;
//送信元
$headers = null;
$headers = "MIME-Version: 1.0\n";
$headers .= "From: GRAYCODE <noreply@gray-code.com>\n";
$headers .= "Reply-To: GRAYCODE <noreply@gray-code.com>\n";
//メール送信
mb_send_mail($to, $subject, $message, $headers);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>完了画面</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>オフィシャルサイト｜藤田海輝｜MIKU FUJITA</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/miku.logo.png">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="confirmstyle.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Poppins for Title -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>

<body>
<header id="mu-header" class="" role="banner">
            <div class="container">
                <nav class="navbar navbar-default mu-navbar">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Logo -->
                            <img class="miku_logo" src="assets/images/miku.logo.png" alt="Profile Image">
                        </div>

                        <!-- nav -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav mu-menu navbar-right">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="index.php#mu-about">ABOUT</a></li>
                            <li><a href="index.php#mu-service">SKILLS</a></li>
                            <li><a href="index.php#mu-portfolio">PORTFOLIO</a></li>
                            <li><a href="index.php#mu-contact">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

    <main>
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">
                        <div class="mu-contact-header">
                            <h4 class="mu-heading-title">お問い合わせ完了</h4>
                            <span class="mu-header-dot"></span>
                        </div>
                        <!-- Start Contact Content -->
                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="mu-contact-bottom">
                                    <p>お問い合わせありがとうございました。<br>
                                    この件に関しましては、追ってご連絡いたします<br>
                                    今後とも当サイトをよろしくお願いいたします。</p>
                                </div>
                                <p><a href="index.php">トップへ</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>

<footer id="mu-footer" class="content m-footer" role="contentinfo">
            <div class="container">
                <div class="mu-footer-area">
                    <p class="mu-copy-right">
                        &copy; 2023 Fujita Miku All Right Reserved.
                    </p>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="assets/js/jquery.filterizr.min.js"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Featured Slider -->
    <script type="text/javascript" src="assets/js/typed.min.js"></script>
    <!-- On scroll JS  -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- Progress Bar -->
    <script type="text/javascript" src="assets/js/jquery.lineProgressbar.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
</body>

</html>