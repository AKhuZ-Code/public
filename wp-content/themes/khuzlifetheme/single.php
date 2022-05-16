<?php get_header() ?>

<div class="container post_content">
    <div class="back-link">
        <a href=<?php echo site_url('/Blog')?>>Back to Blog page</a>
    </div>
    <div class="row">
        <div class="col-md-8">
            <?php while(have_posts()) {
            the_post(); ?>
            <h1><?php the_title()?></h1>
            <h6>Posted On: <?php the_date()?></h6>
            <h6>Post Category: <?php $cat = get_the_category(); echo $cat[0]->cat_name;?></h6>
            <img class="post-image" src=<?php echo get_the_post_thumbnail_url()?>>
            <hr>
            <p><?php the_content()?></p>
            <?php } ?>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: auto;">
            <img class="card-img-top" src=<?php echo get_theme_file_uri('/img/virtualbooth-3.jpg')?> alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">About the author</h5>
              <p class="card-text"><strong>Jason Khu</strong> is the creater of Data & Development
                Deep Dives and is a current student at the University of New South Wales.</p>
            </div>
            <div class="card-body">
              <a href=<?php echo site_url('/About-Me')?> class="card-link">Read more</a>
            </div>
          </div>
        </div>
    </div>
</div>

<?php get_footer() ?>
