<!-------------------------------- フッター ----------------------------------->
<footer>
  <a href="" class="top_back_arrow"><img src="<?php echo get_template_directory_uri(); ?>/image/up_arrow.png" alt=""></a>
  <div class="footer_link">
    <div>
      <a href="/"><img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/image/logo_red.png" alt=""></a>
    </div>
    <nav class="footer_menu1">
      <?php wp_nav_menu(array('theme_location' => 'footer1-navigation')); ?>
    </nav>
    <nav class="footer_menu2">
      <?php wp_nav_menu(array('theme_location' => 'footer2-navigation')); ?>
    </nav>
  </div>

  <hr>

  <p class="copy_write">&copy; 2021 Three Arrows Management All rights reserved.</p>
</footer>

<?php wp_footer(); ?>

</body>