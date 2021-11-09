<?php get_header(); ?>

<!-------------------------------- TAM DAIRY ----------------------------------->
<div class="background_other">
  <h1>TAM DIARY</h1>
  <h2>TAM日記</h2>
</div>

<div class="subtitle">
  <p><a href=”<?php echo esc_url(home_url()); ?>>HOME</a><i class="fas fa-chevron-right fa-fw"></i>TAM日記</p>
</div>

<!-------------------------------- blog記事 ----------------------------------->

<div class="blog_top">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="blogarticle_category">
        <?php the_category(' '); ?>
      </div>
      <h1 class="text-nowrap"><?php the_title(); ?></h1>
      <p class="posted_date"><?php the_date(); ?></p>
</div>
<div class="blog_main">
  <div class="blog_thumbnail"><?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail("", array()); ?>
    <?php endif; ?>
  </div>
  <div class="blog_text"><p><?php the_content(); ?></p></div>
<?php endwhile; ?>
<?php else : ?>
  <!-- 投稿データが取得できない場合の処理 -->
<?php endif; ?>
<div class="back_button">
  <?php
  $h = $_SERVER['HTTP_HOST'];
  if (!empty($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'], $h) !== false)) {
    echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">BACK</a>';
  }
  ?>
</div>
</div>

<hr>


<!-------------------------------- アーカイブ ----------------------------------->

<div class="archive">
  <?php dynamic_sidebar('sidebar'); ?>

  <div class="adsense_short">
    <!-- <img src="<?php echo get_template_directory_uri() ?>/image/blog2.jpg" alt=""> -->
  </div>
  <div class="adsense_long">
    <!-- <img src="<?php echo get_template_directory_uri() ?>/image/BLOG1.png" alt=""> -->
  </div>

</div>

</div>

<?php get_footer(); ?>