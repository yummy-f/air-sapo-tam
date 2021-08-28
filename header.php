<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.7/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/app.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/custom.css">
    <link rel="stylesheet" href="https://use.typekit.net/bsy2knc.css">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
    <script>
        (function(d) {
            var config = {
                    kitId: 'pfx5euy',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <title>Airsapo TAM</title>

    <?php wp_head(); ?>

</head>


<body>
    <!------------------------------- ヘッダー -------------------------------------->
    <!-- <header>
        <div class="toppage_header">
            <a class="logo" href=""><img src="<?php echo get_template_directory_uri(); ?>/image/グループ 134.png" alt=""></a>
            <div class="header_menu">
                <a href="">
                    <p>事業内容</p>
                </a>
            </div>
            <div class="header_menu">
                <a href="">
                    <p>インタビュー</p>
                </a>
            </div>
            <div class="header_menu">
                <a href="">
                    <p>管理事例</p>
                </a>
            </div>
            <div class="header_menu">
                <a href="tam_diary">
                    <p>TAM日記</p>
                </a>
            </div>
            <div class="header_menu">
                <a href="">
                    <p>会社概要</p>
                </a>
            </div>
            <div class="header_menu">
                <a href="">
                    <p>お問い合わせ無料</p>
                </a>
            </div>
            <div class="header_menu">
                <a href="">
                    <p>03-6453-6656（無料）</p>
                </a>
            </div>
        </div>
    </header> -->

    <header>
        <div class="head">
            <div class="header_logo"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/グループ 134.png" alt=""></a></div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="globalMenuSp">
                <ul>
                    <li><a href="#">事業内容</a></li>
                    <li><a href="#">インタビュー</a></li>
                    <li><a href="#">管理事例</a></li>
                    <li><a href="#">TAM日記</a></li>
                    <li><a href="#">会社概要</a></li>
                    <li><a href="#">お問い合わせ無料</a></li>
                    <li><a href="#">03-6453-6656（無料）</a></li>
                </ul>
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