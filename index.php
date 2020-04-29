<?php get_header(); /* Tells WordPress to include header.php */ ?>

    <section class="container-fluid aboutbg text-center">
        <!-- about me section container, goes to edge-->

        <div class="container">
           
            
            <?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=3');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>    
            
             
 <div class="blocker"></div>



        </div> <!-- end of about me section content -->
    </section> <!-- end of about me section -->


    <section class="container-fluid articlebg">
        <!-- articles container, goes to edge -->
        <div class="container">
            <!-- articles content container -->
            <div class="row">
                <!-- row for BS columns -->

                <div>
                    <!-- article section header -->
                    <h3 class="text-center article-title">LATEST ARTICLES</h3>
                </div>

                <div class="col-md-4 article-cent">
<?php $post_id = 9;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>
                </div> <!-- end of article -->

                <div class="col-md-4 article-cent">
<?php $post_id = 11;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?> 
                </div> <!-- end of article -->

                <div class="col-md-4 article-cent">
<?php $post_id = 14;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>
                </div> <!-- end of article -->
            </div><!-- end of row -->


        </div>


    </section> <!-- end of articles section -->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>