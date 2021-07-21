<?php
    get_header();
?>
<div>
    <!-- Hero image+text -->
    <div id="intro" class="view">
        <div class="mask rgba-black-strong ">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                <div class=" justify-content-center text-center ">
                    <div class="col-md-12 mt-5 ">
                        
                        <h2 class="display-5 font-weight-bold white-text pt-5 mb-2 ">FEDERAȚIA ROMÂNĂ DE POLO</h2>
                        <hr>

                        <iframe width="896" height="504" src="https://www.youtube.com/embed/o-3snNxVz2A?start=1" title="YouTube video player" frameborder="0" allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" autoplay; allowfullscreen></iframe>

                        <h4 class="white-text my-4 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti consequuntur.
                        </h4>
                        <button type="button ">LOTURI</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stiri -->
    <div>
    
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
        );
        $_posts = new WP_Query($args);
        ?>

        <?php if ($_posts->have_posts()): ?>

            <div class="row mt-5">
                <?php while ($_posts->have_posts()): $_posts -> the_post();?>

                <div class = "col-lg-4 text-center">

                <?php if(has_post_thumbnail()):?>
                    <a href="<?php the_permalink() ?>">
                    <img src="<?php the_post_thumbnail_url('small_image');?>" class="img-fluid mb-3" alt="<?php the_title();?>"> 
                </a>
                <?php endif; ?>
                    <a href="<?php the_permalink() ?>"> 

                        <h4><?php the_title();?></h4>

                    </a>
                    <?php the_excerpt();?>

                </div>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

    </div>
    

</div>



    <!--- Footer -->
<?php get_footer(); ?> 