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
  <p><a href=”<?php echo esc_url(home_url()); ?>>HOME</a><i class="fas fa-chevron-right fa-fw"></i>管理事例</p>
</div>


<!------------------------------- 管理事例詳細 -------------------------------------->
<input type="button" value="このページを再読込します" onclick="window.location.reload();" />

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
      <?php foreach ($tax_posts as $tax_post) : ?>

        <section class="case_content">
          <!-- カテゴリー -->
          <h2 class="case_category"><?php echo esc_html($taxonomy->name); ?></h2>

          <div class="case_frame">
            <div class="case_content_top">
              <figure>
                <!-- サムネイル -->
                <?php
                if (has_post_thumbnail($tax_post->ID)) {
                  echo get_the_post_thumbnail($tax_post->ID, 'full');
                }
                ?>
              </figure>

              <div class="case_content_title_area">
                <!-- タイトル -->
                <h1 class="case_content_title"><?php echo get_the_title($tax_post->ID); ?></h1>
                <hr>

                <div class="case_property">
                  <h3 class="case_property_title">物件概要</h3>
                  <div>
                    <!-- 所在地 -->
                    <p>所在地：<?php echo get_post_meta($tax_post->ID, 'case_address', true); ?></p>
                    <!-- 構造 -->
                    <p>構造：<?php echo get_post_meta($tax_post->ID, 'case_structure', true); ?></p>
                    <!-- 築年数 -->
                    <p>築年数：<?php echo get_post_meta($tax_post->ID, 'case_age', true); ?></p>
                  </div>
                </div>

              </div>
            </div>

            <!-- 受託前の状況 -->
            <div class="case_status">
              <h4>【管理受託前の状況】</h4>
              <p><?php echo get_post_meta($tax_post->ID, 'case_status', true); ?></p>
            </div>
            <!-- ご提案 -->
            <div class="case_suggest_result">
              <h4>【ご提案】</h4>
              <p><?php echo get_post_meta($tax_post->ID, 'case_suggest', true); ?></p>
            </div>
            <figure class="case_red_arrow"><img src="<?php echo get_template_directory_uri(); ?>/image/case_red_arrow.png" alt=""></figure>
            <!-- 結果 -->
            <div class="case_suggest_result">
              <h4>【結果】</h4>
              <p><?php echo get_post_meta($tax_post->ID, 'case_result', true); ?></p>
            </div>
          </div>
        </section>
      <?php endforeach;
      wp_reset_postdata(); ?>

  <?php
    endif;
  endforeach;
  ?>
<?php else : ?>
  <p>投稿はありません</p>
<?php endif; ?>


<input id="g1" checked="checked" name="radio01" type="radio" /><label class="radio01" for="g1">リンゴ</label>
<input id="g2" name="radio01" type="radio" /><label class="radio01" for="g2">ミカン</label>
<input id="g3" name="radio01" type="radio" /><label class="radio01" for="g3">バナナ</label>

<hr>

<?php get_footer(); ?>