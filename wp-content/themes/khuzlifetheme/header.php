<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/dd78bfec79.js"></script>
</head>

<body class="text-center">
    <!-- <div class="top-banner">
      <p class="banner-text">Data Science/Analytics posts are coming to this site! Rebranding coming soon...  🔥</p>
    </div> -->
    <!-- <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column"></div> -->
        <header class="masthead mb-auto">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
              <div class="container">
                <a href="/"><img class="logo-img" src=<?php echo get_theme_file_uri('/img/2.png')?> alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link <?php if(get_the_title() == 'Home'){
                          echo "text-dark current-item";
                      } else {
                          echo "text-muted";
                      }
                      ?>" href=<?php echo site_url()?> >HOME</a>
                    <a class="nav-item nav-link <?php if(get_the_title() == 'About'){
                          echo "text-dark current-item";
                      } else {
                          echo "text-muted";
                      }
                      ?>" href=<?php echo site_url('/About')?> >ABOUT</a>
                    <a class="nav-item nav-link <?php if(get_post_type() == 'post'){
                          echo "text-dark current-item";
                      } else {
                          echo "text-muted";
                      }
                      ?>" href=<?php echo site_url('/Blog')?>>BLOG</a>
                  </div>
                </div>
              </div>
            </nav>
          </header>
<!-- <hr> -->
