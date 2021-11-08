<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <!-- 初期化 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/app.css">
    <!-- トップ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/index.css">
    <!-- 事業内容 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/service.css">
    <!-- インタビュー -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/interview.css">
    <!-- 管理事例 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/archive_case_study.css">
    <!-- TAM日記一覧 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/archive.css">
    <!-- TAM日記 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/blog.css">
    <!-- 会社概要 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/company.css">
    <!-- お問い合わせ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/contact.css">
    <!-- プライバシーポリシー -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/privacy_policy.css">
    <link rel="stylesheet" href="https://use.typekit.net/bsy2knc.css">

    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">

    <title>Airsapo TAM</title>

    <?php wp_head(); ?>

</head>

<body>
    <!------------------------------- ヘッダー -------------------------------------->
    <header>
        <div class="head">
            <div class="header_logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/image/logo_red.png" alt=""></a></div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="globalMenuSp">
                <?php wp_nav_menu(array('theme_location' => 'header-navigation')); ?>
            </nav>
        </div>
    </header>
    <!-------------------------------- jquery ----------------------------------->

    <script>
        $(function() {
            $('.hamburger').click(function() {
                $(this).toggleClass('active');

                if ($(this).hasClass('active')) {
                    $('.globalMenuSp').addClass('active');
                } else {
                    $('.globalMenuSp').removeClass('active');
                }
            });
        });
    </script>