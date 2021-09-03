<?php
/*
Template Name: TAM日記
*/
?>


<?php get_header(); ?>


<!-------------------------------- TAM DAIRY ----------------------------------->
<div class="background_other">
  <h1>TAM DIARY</h1>
  <h2>TAM日記</h2>
</div>

<div class="subtitle">
  <p>HOME TAM日記一覧</p>
</div>


<!-------------------------------- 日記一覧 ----------------------------------->
<div class="diary_main">

  <?php
  $args = array(
    'post_type' => 'post',
  );
  $event_query = new WP_Query($args);
  ?>

  <?php if ($event_query->have_posts()) : ?>
    <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
      <section class="post_item">
       <p><?php the_date(); ?></p>
        <div class="blog_category"><?php the_category(' '); ?></div>
        <div class="blog_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
      </section>
    <?php endwhile; ?>
  <?php else : ?>
    <div class="error">
      <p>現在日記はありません。</p>
    </div>
  <?php endif; ?>

</div>

<hr>

<?php get_footer(); ?>