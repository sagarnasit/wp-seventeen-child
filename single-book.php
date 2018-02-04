
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
                  <div class="single-book-title">
                        <h1 class="mt-4"><?php the_title() ?></h1>
                  </div>
                  <hr />
                  <!-- Author -->
                  <div class="single-book-content">
                        <p class="lead"><?php the_content(); ?></p>

                  </div>
                  <?php
            }
      }
      ?>



</div>

<!-- Sidebar Widgets Column -->
<?php
get_sidebar('book');
?>

<?php

get_footer();