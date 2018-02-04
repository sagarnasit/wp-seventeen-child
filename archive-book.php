
<?php
get_header();

?>
<!-- Post Content Column -->
<div class="col-lg-8">

      <div>

            <h1>All Books</h1>
            <hr />
      </div>
            <div class="container">
                  <?php
                  if(have_posts()) {
                        while(have_posts()) {
                              the_post();
                              ?>


                                    <div class="row book-box">

                                          <div class="col-xl-4 book-left">
                                          <!-- Title -->
                                                <h3 class="mt-4"><?php the_title() ?></h3>
                                          </div>

                                          <div class="col-xl-8 book-right">
                                          <!-- Author -->

<!--                                                <img src="--><?php //wp_get_attachment_image(); ?><!--" />-->
                                                <p class="lead"><?php the_excerpt(); ?></p>

                                                <a href="<?php the_permalink() ?>">Read More</a>
                                          </div>
                                    </div>

                              <?php
                        }
                  }
                  ?>
            </div>


</div>

<!-- Sidebar Widgets Column -->
<?php
get_sidebar();
?>

<?php

get_footer();