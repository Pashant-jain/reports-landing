<!DOCTYPE html>
<html <?php language_attributes(); ?>
  >
  <head>
    <title>
      <?php bloginfo('name'); ?> &raquo; <?php is_front_page() ?
      bloginfo('description') : wp_title(''); ?>
    </title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.6.3.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>
    >
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="/">Logo</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="true"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="navbar-collapse collapse justify-content-end"
          id="navbarSupportedContent"
          style=""
        >
          <?php wp_nav_menu( array( 'header-menu' =>
          'header-menu' ) ); ?>

          <div>
            <button class="btn demo_btn">Get Free Demo</button>
          </div>
        </div>
      </div>
    </nav>
  </body>
</html>
