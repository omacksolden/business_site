<!-- /*
Template Name: Blog Posts
*/ -->
<?php get_header(); ?>
<section class="row">
         <div class="twelve columns">
           <div id="blogposts">
             <h2><?php the_title(); ?></h2>

             <!-- Begin Loop -->
             <?php query_posts('showposts=4'); ?>
             <?php
                 if ( have_posts() ) {
                     while ( have_posts() ) {
                       the_post(); ?>
                       <div id="post">
                       <p id="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                       <p id="date"><?php echo get_the_date(); ?></p>
                       <a href="<?php the_permalink(); ?>"><p id="readmore">READ MORE</a>
                       </div>
               <div id="space"></div>
               <?php
                   } //end while
                 } //end if
             ?>
             </div>
             <!-- End Loop -->
        </div>
    </section>
<?php get_footer(); ?>
