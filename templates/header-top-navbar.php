<<<<<<< HEAD
<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
=======
<div id="top-section" class="container">
  <div class="logo hidden-phone visible-tablet visible-desktop">
    <a class="brand" title="<?php bloginfo('name'); ?>" href="<?php echo home_url(); ?>/">
      <?php bloginfo('name'); ?>
    </a>
>>>>>>> master
  </div>
  <?php // do_action('icl_language_selector'); ?>
  <nav class="nav-mini" role="navigation">
     <?php
            if (has_nav_menu('mini_navigation')) :
              wp_nav_menu(array('theme_location' => 'mini_navigation', 'menu_class' => 'mini-nav'));
            endif;
    ?>
  </nav>
  <header class="banner navbar" role="banner">
    <div class="navbar-inner">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <nav class="nav-main nav-collapse" role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
            endif;
          ?>
        </nav>
        <div class="pull-right hidden-phone hidden-tablet visible-desktop">
        <form class="navbar-search pull-right" action="">
          <input type="text" id="s" n="s" class="search-query span1" placeholder="Search">
        </form>
        </div>
    </div>
  </header>
</div>
