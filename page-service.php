<?php
/*
Template Name: 事業内容
*/
?>


<?php get_header(); ?>

<?php the_content( $more_link_text, $stripteaser ); ?>

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