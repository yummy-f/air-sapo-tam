<?php
/*
Template Name: トップページ
*/
?>


<?php get_header(); ?>


<?php the_content( $more_link_text, $stripteaser ); ?>


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
  $('.top_modal_panel').on('click', function(e) {
    e.stopPropagation();
  })
  // モーダル戻るボタン
  $('.square_btn').on('click', function(e) {
    $('#service_modal_id').addClass('disable');
  })
</script>



<?php get_footer(); ?>