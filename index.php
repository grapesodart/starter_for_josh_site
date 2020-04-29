<?php get_header(); /* Tells WordPress to include header.php */ ?>

    <section class="container-fluid aboutbg text-center">
        <!-- about me section container, goes to edge-->

        <div class="container">
            <!-- second section content -->
            <h2> GAMES &amp; LEVEL DESIGNER</h2>
            <p class="particle">...and particle wizard</p>
            <p class="about-text">My name is Josh Whitkin. I’m a professional with more than 7 years of industry experience in Games Design, Level design, Scripting and Visual Effects. What makes me passionate about games is the combination of technology and creativity, and how multiple disciplines come together to create an interactive experience. Whether I'm designing for puzzle games, 2D platformers or 3D environments. I always tell a story.</p>
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
                    <img class="img-responsive" alt="portrait" src="http://206.189.45.97/~mesh12/wp-content/themes/josh_theme_wp_finished/images/article1.jpg">
                    <h4>A PORTRAIT</h4>
                    <p class="date">Friday, November 10. 2019</p>
                    <p>STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.</p>
                    <p class="readmore">CONTINUE READING</p>
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
                    <img class="img-responsive" alt="game design" src="http://206.189.45.97/~mesh12/wp-content/themes/josh_theme_wp_finished/images/article3.jpg">
                    <h4>GAMES DESIGN</h4>
                    <p class="date">Friday, November 10. 2019</p>
                    <p>STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts. </p>
                    <p class="readmore">CONTINUE READING</p>
                </div> <!-- end of article -->
            </div><!-- end of row -->


        </div>


    </section> <!-- end of articles section -->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>