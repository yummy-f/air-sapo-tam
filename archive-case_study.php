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
  <p>HOME 管理事例</p>
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


<div class="company_informatino">
  <ul>
    <li>
      <hr>
      <div class="company_informatino_row">
        <p class="information_title">商　号</p>
        <div class="information_details">
          <p>株式会社スリーアローズ</p>
        </div>
      </div>
    </li>
    <li>
      <hr>
      <div class="company_informatino_row">
        <p class="information_title">代表取締役</p>
        <div class="information_details">
          <p>長谷川 翔</p>
        </div>
      </div>
    </li>
    <li>
      <hr>
      <div class="company_informatino_row">
        <p class="information_title">所在地</p>
        <div class="information_details">
          <p>東京都港区芝4 ‐ 3 ‐ 11　VORT三田駅前3階</p>
        </div>
      </div>
    </li>
    <li>
      <hr>
      <div class="company_informatino_row">
        <p class="information_title">設立</p>
        <div class="information_details">
          <p>平成28年4月27日</p>
        </div>
      </div>
    </li>
    <li>
      <hr>
      <div class="company_informatino_row">
        <p class="information_title">資本金</p>
        <div class="information_details">
          <p>10,000,000円</p>
        </div>
      </div>
    </li>
    <li>
      <hr>
      <div class="company_informatino_row">
        <p class="information_title">事業内容</p>
        <div class="information_details">
          <p>不動産賃貸、売買、管理、シェアハウス、マンスリーマンション運営事業</p>
          <p>宿泊業向け物件の企画運営、仲介事業、売買事業</p>
          <p>レンタルスペース、インテリアコーディネート</p>
          <p>民泊</p>
          <p>旅館業の申請サポート</p>
          <p>フードデリバリー</p>
          <p>グループホーム</p>
        </div>
      </div>
    </li>
    <li>
      <hr>
      <div class="company_informatino_row">
        <p class="information_title">免許番号</p>
        <div class="information_details">
          <p>宅地建物取引業　東京都知事(2) 第99320号</p>
          <p>賃貸住宅管理業　国土交通大臣(2)0000032号(仮)</p>
        </div>
      </div>
    </li>
    <li>
      <hr>
      <div class="company_informatino_row">
        <p class="information_title">お問い合わせ</p>
        <div class="information_details">
          <p>TEL : 03-6453-6656</p>
          <p>FAX : 03-6453-6657</p>
          <p>MAIL : kanri@ta-japan.com</p>
        </div>
      </div>
    </li>
    <hr>
  </ul>
</div>

<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.151957299885!2d139.7478705161847!3d35.64862758020199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bb65e435083%3A0x89c1783da4099648!2zVk9SVOS4ieeUsOmnheWJjQ!5e0!3m2!1sja!2sjp!4v1636208535091!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<hr>

<?php get_footer(); ?>