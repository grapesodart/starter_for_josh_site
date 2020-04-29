<?php
    /*
    Template Name: Home page
    */
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

    <section class="container-fluid aboutbg text-center">
        <!-- about me section container, goes to edge-->

        <div class="container">
            
            
            <h2><?php get_field('TitleForAboutMe'); ?></h2><!--  custom field for the aboutme content-->
            
            
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
                    
        <!-- placeholder for col1 -->
                    
                    
                </div> <!-- end of article -->

                <div class="col-md-4 article-cent">
                    
        <!-- placeholder for col2 -->
                    
                    
                </div> <!-- end of article -->

                <div class="col-md-4 article-cent">
                    
        <!-- placeholder for col3 -->
                    
                    
                </div> <!-- end of article -->
            </div><!-- end of row -->


        </div>


    </section> <!-- end of articles section -->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>