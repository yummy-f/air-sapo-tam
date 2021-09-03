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
  <p>HOME お問い合わせ</p>
</div>


<!------------------------------- 問い合わせフォーム -------------------------------------->
<div class="contact_title">
  <h2>無料問い合わせフォーム</h2>
</div>

<div class="contact_form">
<h3>物件情報</h3>
<p class="notice"><span>*</span> は必須項目となります。必ずご記入ください。</p>
</div>

<?php echo do_shortcode('[mwform_formkey key="24"]') ?>


<hr>

<?php get_footer(); ?>