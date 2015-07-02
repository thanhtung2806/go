<nav class="navbar navbar-go navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/logo.png" alt=""></a>
    </div>
    <?php create_navigation(); ?>
  </div>
</nav>