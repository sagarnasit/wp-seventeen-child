
<?php
get_header();

?>
            <!-- Post Content Column -->
            <div class="col-lg-8">

                  <?php
                        if(have_posts()) {
                              while(have_posts()) {
                                    the_post();
                                    ?>
                                    <!-- Title -->
                                     <h3 class="mt-4"> <a href="<?php the_permalink() ?>"> <?php the_title() ?></a></h3>

                                    <!-- Author -->

                                    <hr>

                                    <p class="lead"><?php the_content(); ?></p>
                                    <?php
                              }
                        }
                  ?>



            </div>

            <!-- Sidebar Widgets Column -->
<?php
get_sidebar();
?>

<?php

get_footer();