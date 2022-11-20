<?php get_header(); ?>
      <div class="row">
        <div class="col-lg-8 sidebar content">
          <?php
            while (have_posts()){
              the_post();
          ?>
          <center><h2><?php the_title(); ?></h2></center>
          <?php the_content(); ?>
        <?php } ?>

        </div>
        <div class="col-lg-4 sidebar">

        </div>
      </div>

<?php get_footer(); ?>
