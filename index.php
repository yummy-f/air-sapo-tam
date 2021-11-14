<?php
/*
Template Name: トップページ
*/
?>


<?php get_header(); ?>


<!------------------------------- 見出し -------------------------------------->
<div class="main">
  <img class="header_back" src="<?php echo get_template_directory_uri(); ?>/image/background_top.png" alt="">

  <h1>常に最大収益化を一緒に目指す賃貸経営</h1>

  <div class="top_white">
    <img class="top_white_back" src="<?php echo get_template_directory_uri(); ?>/image/white_top.png" alt="">
    <img class="top_white_universe" src="<?php echo get_template_directory_uri(); ?>/image/top_universe.png" alt="">
    <img class="top_white_logo" src="<?php echo get_template_directory_uri(); ?>/image/top_tam.png" alt="">
    <a class="common_button service_modal_open" href="#">CLICK</a>
  </div>
</div>

<div class="main_mobile">
  <img class="header_back_mobile" src="<?php echo get_template_directory_uri(); ?>/image/background_top_mobile.png" alt="">

  <h1>常に最大収益化を一緒に目指す賃貸経営</h1>

  <div class="top_white_mobile">
    <img class="top_white_universe_mobile" src="<?php echo get_template_directory_uri(); ?>/image/top_universe.png" alt="">
    <img class="top_white_logo_mobile" src="<?php echo get_template_directory_uri(); ?>/image/top_tam.png" alt="">
    <a class="common_button_mobile common_button service_modal_open" href="#">CLICK</a>
  </div>
</div>
<div class="service_modal-panel-back disable" id="service_modal_id">
  <div class="top_modal_panel">
    <h1 class="top_modal_title">FEATURES</h1>
    <h2 class="top_modal_subtitle">5つのできること</h2>
    <div class="top_modal_toppage_box">
      <ul class="top_modal_toppage_box_list01">
        <li class="fadein01"><a href=""><p class="top_modal_toppage_box_list01_num">01</p><img src="<?php echo get_template_directory_uri(); ?>/image/service_modal 02.png" alt="">
            <p class="top_modal_toppage_box_list01_text">民泊可能物件の管理</p>
          </a>
        </li>
        <li class="fadein02"><a href=""><p class="top_modal_toppage_box_list01_num">02</p><img src="<?php echo get_template_directory_uri(); ?>/image/service_modal 02.png" alt="">
        <p class="top_modal_toppage_box_list01_text">シェアハウスの管理</p>
          </a>
        </li>
        <li class="fadein03"><a href=""><p class="top_modal_toppage_box_list01_num">03</p><img src="<?php echo get_template_directory_uri(); ?>/image/service_modal 02.png" alt="">
        <p class="top_modal_toppage_box_list01_text">レンタルスペース可能物件<br>の管理</p>
          </a>
        </li>
      </ul>

      <ul class="top_modal_toppage_box_list02">
        <li class="fadein04"><a href=""><p class="top_modal_toppage_box_list01_num">04</p><img src="<?php echo get_template_directory_uri(); ?>/image/service_modal 02.png" alt="">
        <p class="top_modal_toppage_box_list01_text">一般賃貸物件の管理</p>
          </a>
        </li>
        <li class="fadein05"><a href=""><p class="top_modal_toppage_box_list01_num">05</p><img src="<?php echo get_template_directory_uri(); ?>/image/service_modal 02.png" alt="">
        <p class="top_modal_toppage_box_list01_text">アパートの1室から管理可能</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

<!------------------------------- 強み -------------------------------------->
<div class="Strengths">
  <div class="strengths_main">
    <h2>STRENGTHS</h2>
    <h3>強み</h3>
  </div>

  <div class="strength_pic">
    <ul class="strength_pic_list1">
      <li><img src="<?php echo get_template_directory_uri(); ?>/image/Strengths01.png" alt="">
        <p>収益最大化
        </p>
      </li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/image/Strengths02.png" alt="">
        <p>多種多様な空室活用提案
        </p>
      </li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/image/Strengths03.png" alt="">
        <p>管理対応エリアは日本全国
        </p>
      </li>
    </ul>

    <ul class="strength_pic_list2">
      <li><img src="<?php echo get_template_directory_uri(); ?>/image/Strengths04.png" alt="">
        <p>英・中国・韓国多言語対応可
        </p>
      </li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/image/Strengths05.png" alt="">
        <p>ワンストップ賃貸管理でお任せ管理
        </p>
      </li>
    </ul>
    <a class="strength_more common_button" href="">MORE</a>
  </div>
</div>


<!------------------------------- INTERVIEW -------------------------------------->
<div class="interview_box">
  <h1>INTERVIEW</h1>
  <h2>インタビュー</h2>
  <div class="interview_picture">
    <img src="<?php echo get_template_directory_uri(); ?>/image/interview01.png" alt="">
    <div class="interview_right_box">
      <h3>常に時代の変化を感じて<br>新たな不動産活用を</h3>
      <p>ご所有不動産の収益最大化を一緒に目指し、<br>日々時代の流れに敏感になり皆様にとって最適な不動産経営となるよう最後のご依頼の管理会社となるよう精進してまいります。
      </p>
      <a class="common_button" href="interview">MORE</a>
    </div>
  </div>
</div>


<!------------------------------- FLOW -------------------------------------->
<div class="flow">
  <h1>FLOW</h1>
  <h2>契約までの流れ</h2>
  <div class="flow_icon_list">
    <div class="flow_icon">
      <span class="flow_icon_number">01</span>
      <div class="icon_box">
        <img src="<?php echo get_template_directory_uri(); ?>/image/flow01.png" alt="">
      </div>
      <p class="flow_constract">お問い合わせ</p>
    </div>
    <div class="flow_icon">
      <span class="flow_icon_number">02</span>
      <div class="icon_box">
        <img src="<?php echo get_template_directory_uri(); ?>/image/flow02.png" alt="">
      </div>
      <p class="flow_constract">物件調査・査定<br>各種お見積り</p>
    </div>
    <div class="flow_icon">
      <span class="flow_icon_number">03</span>
      <div class="icon_box">
        <img src="<?php echo get_template_directory_uri(); ?>/image/flow03.png" alt="">
      </div>
      <p class="flow_constract">ご契約</p>
    </div>
    <div class="flow_icon">
      <span class="flow_icon_number">04</span>
      <div class="icon_box">
        <img src="<?php echo get_template_directory_uri(); ?>/image/flow04.png" alt="">
      </div>
      <p class="flow_constract">入居募集<br>管理業務開始</p>
    </div>
  </div>
  <div class="more_button">
    <a class="common_button" href="">MORE</a>
  </div>
</div>


<!------------------------------- jquery -------------------------------------->

<script>
  // スライダー
  $('.service_modal_slider').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  // モーダル
  $('.service_modal_open').on('click', function() {
    $('#service_modal_id').removeClass('disable');
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