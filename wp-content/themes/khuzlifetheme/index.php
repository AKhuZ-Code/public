<?php get_header() ?>

<div class="container content-page">

  <h2 class="heading2">Blog</h2>

    <section>
    <div class="row">
        <?php while(have_posts()){ ?>
            <?php the_post(); ?>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=<?php echo get_the_post_thumbnail_url()?>>
                <div class="card-body">
                 <h4 class="mb-0">
                    <a class="text-dark" href=<?php the_permalink()?>><?php the_title() ?></a>
                </h4>
                <div class="mb-1 text-muted"><?php the_date() ?></div>
                  <p class="card-text"><?php
                        if (get_the_excerpt()) {
                          echo get_the_excerpt();
                        } else {
                          echo wp_trim_words(get_the_content(), 18);
                        }  ?>
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
        <?php echo paginate_links(); ?>
    </section>
</div>

<?php get_footer() ?>
