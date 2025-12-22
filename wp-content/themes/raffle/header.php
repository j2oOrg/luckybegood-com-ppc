<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    $meta_title = 'luckybegood licensed raffle — Alberta charitable draw';
    $meta_description = 'Licensed Alberta raffle operated by Luckybegood Dog Rescue Foundation — 995 entries at $10 each • Draw Mar 30, 2026 at 7:00 PM MT • Winner receives 75% of ticket sales.';
    $meta_image = get_theme_file_uri('/assets/images/img.png');
  ?>
  <meta name="description" content="<?php echo esc_attr( $meta_description ); ?>">
  <meta property="og:title" content="<?php echo esc_attr( $meta_title ); ?>">
  <meta property="og:description" content="<?php echo esc_attr( $meta_description ); ?>">
  <meta property="og:image" content="<?php echo esc_url( $meta_image ); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo esc_url( home_url('/') ); ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo esc_attr( $meta_title ); ?>">
  <meta name="twitter:description" content="<?php echo esc_attr( $meta_description ); ?>">
  <meta name="twitter:image" content="<?php echo esc_url( $meta_image ); ?>">
  <link rel="icon" href="<?php echo esc_url( home_url('/favicon.ico') ); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( home_url('/apple-touch-icon.png') ); ?>">
  <?php wp_head(); ?>
  <style>
    /* Inline tweak: soften the nav background to match the page palette */
    .nav-rail-q5h8{
      background:rgba(249,246,241,0.92);
      border-bottom:1px solid rgba(24,21,18,0.12);
      box-shadow:0 10px 26px rgba(17,12,6,0.08);
    }
  </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
  $current = '';
  if (is_front_page()) {
      $current = 'home';
  } elseif (is_page('prizes')) {
      $current = 'prizes';
  } elseif (is_page('rules')) {
      $current = 'rules';
  } elseif (is_page('faq')) {
      $current = 'faq';
  }
  $brand = get_theme_file_uri('/assets/images/img.png');
  $faq_page = get_page_by_path('faq');
  $rules_page = get_page_by_path('rules');
  $prizes_page = get_page_by_path('prizes');
  $faq_link = $faq_page ? get_permalink($faq_page) : home_url('/faq');
  $rules_link = $rules_page ? get_permalink($rules_page) : home_url('/rules');
  $prizes_link = $prizes_page ? get_permalink($prizes_page) : home_url('/prizes');
?>

<nav class="navbar navbar-expand-lg nav-rail-q5h8">
  <div class="shell-wrap-z4m2 d-flex align-items-center justify-content-between">
    <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
      <img class="brand-logo-u8b4" src="<?php echo esc_url( $brand ); ?>" alt="luckybegood logo">
      <span class="sr-only">luckybegood</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'luckybegood'); ?>">
      <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav mb-2 mb-lg-0 align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link-u4e7<?php echo $current === 'home' ? ' active' : ''; ?>" href="<?php echo esc_url( home_url('/#home') ); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-u4e7" href="<?php echo esc_url( home_url('/#impact') ); ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-u4e7" href="<?php echo esc_url( home_url('/#how') ); ?>">How It Works</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-u4e7<?php echo $current === 'prizes' ? ' active' : ''; ?>" href="<?php echo esc_url( $prizes_link ); ?>">Prizes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-u4e7<?php echo $current === 'rules' ? ' active' : ''; ?>" href="<?php echo esc_url( $rules_link ); ?>">Rules</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-u4e7" href="<?php echo esc_url( home_url('/#winners') ); ?>">Winners</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-u4e7" href="<?php echo esc_url( home_url('/#contact') ); ?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-u4e7<?php echo $current === 'faq' ? ' active' : ''; ?>" href="<?php echo esc_url( $faq_link ); ?>">FAQ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
