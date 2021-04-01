<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>

<body class="text-center">
    <div class="top-banner">
      <p class="banner-text">Data Science/Analytics posts are coming to this site! Rebranding coming soon...  🔥</p>
    </div>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column"></div>
        <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">KhuZ Life</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link <?php if(get_the_title() == 'Home'){
                    echo "text-dark current-item";
                } else {
                    echo "text-muted";
                }
                ?>"
                href=<?php echo site_url()?>>🏠 Home</a>
            <a class="nav-link <?php if(get_the_title() == 'About Me'){
                    echo "text-dark current-item";
                } else {
                    echo "text-muted";
                }
                ?>"
                href=<?php echo site_url('/About-Me')?> >💁‍♂️ About Me</a>
            <a class="nav-link <?php if(get_post_type() == 'post'){
                    echo "text-dark current-item";
                } else {
                    echo "text-muted";
                }
                ?>"
                href=<?php echo site_url('/Blog')?>>✏️ Blog</a>
          </nav>
        </div>
    </div>
</header>
<hr>
