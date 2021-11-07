<?php
/*
Template Name: 管理事例
*/
?>


<?php get_header(); ?>


<!------------------------------- 管理事例 -------------------------------------->
<div class="background_other">
  <h1>CASE STUDY</h1>
  <h2>管理事例</h2>
</div>

<div class="subtitle">
  <p>HOME<i class="fas fa-chevron-right fa-fw"></i>管理事例</p>
</div>


<!------------------------------- 管理事例詳細 -------------------------------------->


<?php
$taxonomy_name = 'case_study-category'; // タクソノミーのスラッグ名を入れる
$post_type = 'case_study'; // カスタム投稿のスラッグ名を入れる
$args = array(
  'order'        => 'DESC',
);
$taxonomys = get_terms($taxonomy_name, $args);

if (!is_wp_error($taxonomys) && count($taxonomys)) :
  foreach ($taxonomys as $taxonomy) :
    $tax_posts = get_posts(array(
      'post_type' => $post_type,
      'posts_per_page' => -1, // 表示させたい記事数
      'tax_query' => array(
        array(
          'taxonomy' => $taxonomy_name,
          'terms' => array($taxonomy->slug),
          'field' => 'slug',
          'include_children' => true, //子タクソノミーを含める
        )
      )
    ));
    if ($tax_posts) :
?>
      <!-- 本文 -->
      <h2><?php echo esc_html($taxonomy->name); ?></h2>

      <?php foreach ($tax_posts as $tax_post) : ?>

        <?php the_post_thumbnail('thumbnail'); // アイキャッチ画像 ?>
        <?php echo get_the_title($tax_post->ID); // タイトル ?>

      <?php endforeach;
      wp_reset_postdata(); ?>

  <?php
    endif;
  endforeach;
  ?>
<?php else : ?>
  <p>投稿はありません</p>
<?php endif; ?>




<hr>

<?php get_footer(); ?>