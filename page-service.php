<?php
/*
Template Name: 事業内容
*/
?>


<?php get_header(); ?>


<!------------------------------- 事業内容 -------------------------------------->

<div class="background_other">
  <h1>SERVICE</h1>
  <h2>事業内容</h2>
</div>

<div class="subtitle">
  <p><a href=”<?php echo esc_url(home_url()); ?>>HOME</a><i class="fas fa-chevron-right fa-fw"></i>事業内容</p>
</div>

<div class="service_container">
  <!------------------------------- 事業内容TOP -------------------------------------->
  <section class="service_top">
    <div class="service_toptitle">
      <h1>不動産にかかる管理業務をワンストップでマネジメント<br>
        空室対策をオーナー様の立場になって多角的視点から考えて提案、実行する</h1>
      <h2>不動産投資は、住むための住居や事務所利用のためのオフィス用物件と、<br>
        ある一定の用途で貸出し、収入を得ていく運用方法が一般的ですが<br>
        「秘めた可能性を最大限に」をモットーに、時代の流れに沿って収益最大化を考えます。
      </h2>
      <h3>築年数が古くなり、賃料が下がってしまう。そのためにリフォームをする。<br>
        不動産の価値を上げるのは、色々な方法があります。<br>
        その１つとして、民泊やレンタルスペースの活用など弊社だからできる提案で価値を最大化に引き上げます。</h3>
    </div>
</div>
</section>
<!------------------------------- 管理プラン -------------------------------------->
<section class="service_plan_container">
  <div class="service_plan">
    <h1 class="service_title">選べる5つ管理プラン</h1>
    <div class="service_plan_flex01">
      <div class="service_plan_flex_box01">
        <img src="<?php echo get_template_directory_uri(); ?>/image/service01.png" alt="">
        <h4>サブリースプラン</h4>
        <p>オーナー様から弊社が物件を一括<br>で借り上げ、毎月決まった賃料を<br>オーナー様に送金いたします。</p>
        <!-- <a class="service_modal_open" href="#" data-slide="0">READ MORE<i class="fas fa-chevron-right fa-fw"></i></a> -->
      </div>
      <div class="service_plan_flex_box01">
        <img src="<?php echo get_template_directory_uri(); ?>/image/service02.png" alt="">
        <h4>マスターリースプラン</h4>
        <p>オーナー様から弊社が物件を一括<br>で借り上げ、毎月入居率に応じた<br>賃料を送金いたします。</p>
        <!-- <a class="service_modal_open" href="#" data-slide="1">READ MORE<i class="fas fa-chevron-right fa-fw"></i></a> -->
      </div>

      <div class="service_plan_flex_box01">
        <img src="<?php echo get_template_directory_uri(); ?>/image/service03.png" alt="">
        <h4>レベニューシェアプラン</h4>
        <p>約定賃料を上回る成約の場合<br>上振れ分を折半</p>
        <!-- <a class="service_modal_open" href="#" data-slide="2">READ MORE<i class="fas fa-chevron-right fa-fw"></i></a> -->
      </div>
    </div>

    <div class="service_plan_flex02">
      <div class="service_plan_flex_box02">
        <img src="<?php echo get_template_directory_uri(); ?>/image/service04.png" alt="">
        <h4>集金代行プラン</h4>
        <p>オーナー様から弊社が管理を一括で請け負い。</p>
        <!-- <a class="service_modal_open" href="#" data-slide="3">READ MORE<i class="fas fa-chevron-right fa-fw"></i></a> -->
      </div>

      <div class="service_plan_flex_box02">
        <img src="<?php echo get_template_directory_uri(); ?>/image/service05.png" alt="">
        <h4>募集媒介プラン</h4>
        <p>オーナー様から弊社が募集業務を<br>専任で請け負います。更新時の手続き代行や退去立ち合い業務もスポットで請負可能です。</p>
        <!-- <a class="service_modal_open" href="#" data-slide="4">READ MORE<i class="fas fa-chevron-right fa-fw"></i></a> -->
      </div>
    </div>
  </div>
  <div class="service_modal-panel-back disable" id="service_modal_id">
    <div class="service_modal_panel">
      <h1 class="service_title">サブリースプラン</h1>
      <ul class="service_modal_slider">
        <li class="service_modal_slider_main">
          <img src="<?php echo get_template_directory_uri(); ?>/image/service_modal01.png" alt="">
          <p class="service_modal_text">1毎月決まった賃料をオーナー様に送金いたします。</p>
        </li>
        <li class="service_modal_slider_main">
          <img src="<?php echo get_template_directory_uri(); ?>/image/service_modal01.png" alt="">
          <p class="service_modal_text">2毎月決まった賃料をオーナー様に送金いたします。</p>
        </li>
        <li class="service_modal_slider_main">
          <img src="<?php echo get_template_directory_uri(); ?>/image/service_modal01.png" alt="">
          <p class="service_modal_text">3毎月決まった賃料をオーナー様に送金いたします。</p>
        </li>
        <li class="service_modal_slider_main">
          <img src="<?php echo get_template_directory_uri(); ?>/image/service_modal01.png" alt="">
          <p class="service_modal_text">4毎月決まった賃料をオーナー様に送金いたします。</p>
        </li>
        <li class="service_modal_slider_main" id="test01">
          <img src="<?php echo get_template_directory_uri(); ?>/image/service_modal01.png" alt="">
          <p class="service_modal_text">5毎月決まった賃料をオーナー様に送金いたします。</p>
        </li>
      </ul>
      <a class="service_modal_close" href="#">戻る</a>
    </div>
  </div>

</section>
<!------------------------------- PM -------------------------------------->
<section class="pm_container">
  <div class="service_container">
    <div class="pm_top_title">
      <h1 class="service_title">PM業務</h1>
      <p class="pm_bm_toptext">リーシング、契約締結業務、クレーム対応、賃料の回収、滞納督促、工事発注・管理、オーナー様への報告業務といった賃貸管理における主にソフト面の業務を中心に、入居者満足・オーナー様の収益向上に向けて行っています。<br>
        オーナー様の大切な資産の価値・利益を向上させることを目的とします。</p>
    </div>
  </div>
  <div class="pm_bm_box">
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
  </div>
</section>

<!------------------------------- BM -------------------------------------->
<section class="pm_container">
  <div class="service_container">
    <div class="pm_top_title">
      <h1 class="service_title">BM業務</h1>
      <p class="pm_bm_toptext">建物の巡回、清掃、法定点検や各種届出などを請負可能です。<br>
        マンションの顔となる外観や共用部を清潔に保つことも、入居者満足にもつながります。</p>
    </div>
  </div>
  <div class="pm_bm_box">
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="pm_bm_box_module">
      <img src="<?php echo get_template_directory_uri(); ?>/image/service06.png" alt="">
      <p>テキストテキストテキストテキストテキストテキスト</p>
    </div>
  </div>
</section>

<!------------------------------- 対応エリア -------------------------------------->

<section class="cover">
  <div class="pm_top_title">
    <h1 class="service_title">対応エリア</h1>
  </div>
  <div class="cover_box">
    <img src="<?php echo get_template_directory_uri(); ?>/image/service07.png" alt="">
    <p>現在も北は北海道、南は沖縄まで管理物件があります。<br>
      <br>
      民泊管理業者との提携、不動産流通サイト、現地地場業者さんとの連携により、円滑な管理、リーシングが可能です。
    </p>
  </div>
</section>
<hr>


<!------------------------------- jquery -------------------------------------->

<script>
  // スライダー用
  var slideNum = 0;

  // スライダー
  var slider = $('.service_modal_slider').slick({
    autoplay: false,
    autoplaySpeed: 5000,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    centerMode: true,
    dots: true,
    initialSlide: slideNum, // 初期表示スライド
    focusOnSelect: true, // 他の画像をクリックすると中央に移動
    responsive: [{
        breakpoint: 780,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });
  // モーダル
  $('.service_modal_open').on('click', function() {
    $('#service_modal_id').removeClass('disable');
    slideNum = $(this).attr('data-slide');
    slider.slick('slickGoTo', slideNum);
    console.log(slideNum);
    slider.slick('setPosition');
  });
  // グレー背景で戻る
  $('.service_modal-panel-back').on('click', function() {
    $('#service_modal_id').addClass('disable');
  })
  // グレー背景以外のクリック無効化
  $('.service_modal_panel').on('click', function(e) {
    e.stopPropagation();
  })
  // モーダル戻るボタン
  $('.service_modal_close').on('click', function(e) {
    $('#service_modal_id').addClass('disable');
  })
</script>



<?php get_footer(); ?>