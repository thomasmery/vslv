<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'vslv'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  
  <main class="main" role="main">

    <?php //var_dump(roots_template_path()); ?>

    <div id="discovery"></div>
    <div id="content" class="is-hidden">
      <script type="text/template" id="content-template">
        <div class="content <%= data.type %>">
          <span class="hi-response hi-response-remove toggle"></span>
          <span class="hi-response hi-response-down-arrow scroll-hint"></span>
          <% if(data.type == 'project') { %>
            <h1><%= data.title %></h1>
          <% } %>
          <% if(data.content !== '') { %>
            <%= data.content %>
          <% } else { %>
            <h3>Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magna.</h3>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Nullam id dolor id nibh ultricies vehicula ut id elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur.</p>
          <% } %>
        </div>
      </script>
    </div>
    <div id="portfolio" class="swiper-container">
      <div class="content swiper-wrapper">
        <ul class="swiper-slide"></ul>
      </div>
    </div>
    
  </main><!-- /.main -->

  <div class="seo-content">
    <?php include roots_template_path(); ?>
  </div>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
