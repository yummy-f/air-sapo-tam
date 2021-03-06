<?php
/*
Template Name: お問い合わせ
*/
?>


<?php get_header(); ?>


<!------------------------------- お問い合わせ -------------------------------------->
<div class="background_other">
  <h1>CONTACT</h1>
  <h2>お問い合わせ</h2>
</div>

<div class="subtitle">
  <p><a href=”<?php echo esc_url(home_url()); ?>>HOME</a><i class="fas fa-chevron-right fa-fw"></i>お問い合わせ</p>
</div>


<!------------------------------- 問い合わせフォーム -------------------------------------->
<div class="contact_title">
  <h2>無料問い合わせフォーム</h2>
</div>

<?php echo do_shortcode('[mwform_formkey key="29"]') ?>

<hr>

<script>
  //チェックボックスをチェックするとボタンがアクティブになる
  $(function() {
    $('.submit_check').prop('disabled', true);
    $('#check').on('click', function() {
      if ($(this).prop('checked') == false) {
        $('.submit_check').prop('disabled', true);
        $('.submit_check').css('opacity', 0.7);
      } else {
        $('.submit_check').prop('disabled', false);
        $('.submit_check').css('opacity', 1);
        $('.submit_check').css('cursor', 'pointer');
      }
    });
  });
</script>

<?php get_footer(); ?>