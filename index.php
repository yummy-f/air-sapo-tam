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
  $('.service_modal-panel-back,.square_btn').on('click', function() {
    $('#service_modal_id').addClass('disable');
    $('.top_modal_toppage_box ul.top_modal_toppage_box_list01,.top_modal_toppage_box ul.top_modal_toppage_box_list02').removeClass('disable');
    $('.top_modal_toppage_box .second_box').addClass('disable');
  })
  // $('.top_modal_toppage_box ul.top_modal_toppage_box_list01 li,.top_modal_toppage_box ul.top_modal_toppage_box_list02 li').on('click', function() {
  //   $('.top_modal_toppage_box ul.top_modal_toppage_box_list01,.top_modal_toppage_box ul.top_modal_toppage_box_list02').addClass('disable');
  //   $('.top_modal_toppage_box .second_box').removeClass('disable');
  //   var i = "no" + $('.top_modal_toppage_box ul li').index(this);
  //   $('.second_box li').addClass('disable');
  //   $('.second_box li.'+ i).removeClass('disable');
  //   $('.second_box .common_button').removeClass('disable');
  // })
  // モーダル戻るボタン
  $('.second_box .common_button').on('click', function() {
    $('.second_box li').addClass('disable');
    $('.top_modal_toppage_box_list01,.top_modal_toppage_box_list02').removeClass('disable');
    $('.second_box .common_button').addClass('disable');
   })
</script>



<?php get_footer(); ?>