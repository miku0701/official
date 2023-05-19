<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.php");
	exit();
}

//メールの日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

//各項目を内容を取得
$name = $_POST['name'];
$email = $_POST['email'];
$reason = $_POST['reason'];
$contact_body = $_POST['contact_body'];

// 完了画面へ値を送る
$_SESSION['form_data'] = $_POST;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>確認画面</title>
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
    <!-- Open Sans for body font -->
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
                                <h4 class="mu-heading-title">お問い合わせ内容確認</h4>
                                <span class="mu-header-dot"></span>
                            </div>
                            <div class="mu-contact-content">
                                <div class="row">
                                    <div class="mu-contact-bottom">
                                        <form action="complete.php" method="post">

                                            <div class="input-area">
                                                <p>名前</p>
                                                <?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?>
                                            </div>

                                            <div class="input-area">
                                                <p>メール</p>
                                                <?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8');?>
                                            </div>

                                            <div class="input-area">
                                                <p>件名</p>
                                                <?php echo htmlspecialchars($reason,ENT_QUOTES,'UTF-8');?>
                                            </div>

                                            <div class="input-area">
                                                <p>お問い合わせ内容</p>
                                                <?php echo nl2br(htmlspecialchars($contact_body,ENT_QUOTES,'UTF-8'));?>
                                            </div>
                                            <div class="input-area">
                                                <input type='button' onclick='history.back()' value='戻る'
                                                    class="mu-send-msg-btn">
                                                <input type="submit" name="submit" value="送信" class="mu-send-msg-btn">
                                                <input type="hidden" name="name" value="<?php echo $name;?>">
                                                <input type="hidden" name="email" value="<?php echo $email;?>">
                                                <input type="hidden" name="reason" value="<?php echo $reason;?>">
                                                <input type="hidden" name="contact_body"
                                                    value="<?php echo $contact_body;?>">
                                            </div>
                                        </form>
                                    </div>
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
</body>
<!-- jQuery library -->

</html>