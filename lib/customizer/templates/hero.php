<?php
function shoestrap_hero_content() {
  $herotitle        = get_theme_mod( 'shoestrap_hero_title' );
  $herocontent      = get_theme_mod( 'shoestrap_hero_content' );
  $cta_text         = get_theme_mod( 'shoestrap_hero_cta_text' );
  $cta_link         = get_theme_mod( 'shoestrap_hero_cta_link' );
  $hero_visibility  = get_theme_mod( 'shoestrap_hero_visibility' );

  $hero = false;
  if ( $hero_visibility == 'front' ) {
    if ( is_front_page() ) {
      if ( !empty( $herotitle ) )                   { $hero = true; }
      if ( !empty( $herocontent ) )                 { $hero = true; }
      if ( !empty( $cta_text ) )                    { $hero = true; }
      if ( has_action( 'shoestrap_hero_inside' ) )  { $hero = true; }
    }
  } else {
      if ( !empty( $herotitle ) )                   { $hero = true; }
      if ( !empty( $herocontent ) )                 { $hero = true; }
      if ( !empty( $cta_text ) )                    { $hero = true; }
      if ( has_action( 'shoestrap_hero_inside' ) )  { $hero = true; }
  }

  if ($hero == true) { ?>
    <div class="jumbotron masthead">
      <div class="container">
        <?php do_action('shoestrap_hero_inside'); ?>

        <h1 class="hero-title"><?php echo $herotitle; ?></h1>
        <p class="hero-content"><?php echo $herocontent; ?></p>
        <?php if ( !empty( $cta_text ) ) { ?>
          <p class="hero-button">
            <a class="btn" href="<?php echo $cta_link; ?>">
              <?php echo $cta_text; ?>
            </a>
          </p>
        <?php } ?>

      </div>
    </div>
  <?php }
}
add_action( 'shoestrap_hero', 'shoestrap_hero_content' );