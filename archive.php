<?php
/*
Template Name: TAM日記
*/
?>


<?php get_header(); ?>


<!-------------------------------- TAM DAIRY ----------------------------------->
<div class="tam_diary">
  <h1>TAM DIARY</h1>
  <h2>TAM日記</h2>
</div>

<div class="diary_list">
  <p>HOME TAM日記一覧</p>
</div>


<!-------------------------------- 日記一覧 ----------------------------------->
<div class="diary_main">

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <section class="post-item">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
      </section>
    <?php endwhile; ?>
  <?php else : ?>
    <div class="error">
      <p>お探しの記事は見つかりませんでした。</p>
    </div>
  <?php endif; ?>

</div>

<hr>

<?php get_footer(); ?>