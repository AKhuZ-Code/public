<?php get_header() ?>

<main role="main" class="inner cover hero-image">
    <!-- <h1 class="cover-heading">Welcome to my blog!</h1>
    <p class="lead">On the KhuZ Life blog, I create posts about productivity and professional development.</p>
    <p class="lead">
      <a href=<?php echo site_url('/About-Me')?> class="btn btn-lg btn-secondary">Learn more</a>
      <a href=<?php echo site_url('/Blog')?> class="btn btn-lg btn-primary">Read posts</a>
    </p> -->
        <div class="container">
          <div class="row">
            <div class="col-md-6 left-align">
              <h1 intro-text>Hi, I'm <strong>Jason Khu</strong>!</h1>
              <h4>Actuarial & Commerce Student @ UNSW</h4>
              <p>Data Analytics - Data Science - Data Visualisation - Web Development - Web Design - WordPress Development</p>
              <p>See my work:
                <a target="_blank" rel="noopener noreferrer" class="footer-link" href="https://github.com/AKhuZ-Code">
                  <i class="bi bi-github i-spaced"></i>
                </a>
                <a target="_blank" rel="noopener noreferrer" class="footer-link" href="https://public.tableau.com/app/profile/jason.khu8035#!/?newProfile=&activeTab=0">
                  <i class="bi bi-bar-chart-line-fill"></i>
                </a>
              </p>
              <a href=<?php echo site_url('/About-Me')?>>
                <button type="button" class="btn btn-outline-dark">LEARN MORE</button>
              </a>
              <a href=<?php echo site_url('/Blog')?>>
                <button type="button" class="btn btn-outline-dark">SEE MY POSTS</button>
              </a>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
</main>

<h2 class="heading2 titleimage">My Latest Blog Posts</h2>

<div class="container front-page">
  <div class="row">
          <?php $homepagePosts = new WP_Query(array(
                        'posts_per_page' => 3
                    ));

                    while($homepagePosts->have_posts()) {
                        $homepagePosts->the_post(); ?>
            <div class="col-md-4 content">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src=<?php echo get_the_post_thumbnail_url()?>>
                <div class="card-body">
                    <h4 class="card-title"><a class="text-dark" href=<?php the_permalink()?>><?php the_title() ?></a></h4>
                    <div class="mb-1 text-muted"><?php the_date() ?></div>
                    <p class="card-text">
                        <?php
                        if (get_the_excerpt()) {
                          echo get_the_excerpt();
                        } else {
                          echo wp_trim_words(get_the_content(), 18);
                        }
                        ?>
                    </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href=<?php the_permalink()?>>Read more</a>
                            <small class="text-muted"><?php echo ceil(str_word_count(get_the_content())/285)?> min</small>
                        </div>
                  </div>
              </div>
            </div>
      <?php } ?>
  </div>
</div>

<!-- <h2 class="heading2">SEE OTHERS MY OTHER PROJECTS</h2>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.pexels.com/photos/4065876/pexels-photo-4065876.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/356065/pexels-photo-356065.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/4476139/pexels-photo-4476139.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->

<!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.pexels.com/photos/4065876/pexels-photo-4065876.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/356065/pexels-photo-356065.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/4476139/pexels-photo-4476139.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Third slide">
    </div>
  </div>
</div> -->

<?php get_footer() ?>
