<?php
    get_header();
?>
    <!-- Hero image+text -->
    <div id="intro" class="view">
        <div class="mask rgba-black-strong ">
            <div class="container-fluid d-flex align-items-center justify-content-center h-50">
                <div class=" justify-content-center text-center ">
                    <div class="col-md-6 ">
                        <h2 class="display-5 font-weight-bold white-text pt-5 mb-2 ">FEDERAȚIA ROMÂNĂ DE POLO</h2>
                        <hr>

                        <iframe width="1120" height="630" src="https://www.youtube.com/embed/o-3snNxVz2A?start=1" title="YouTube video player" frameborder="0" allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" autoplay; allowfullscreen></iframe>

                        <h4 class="white-text my-4 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti consequuntur.
                        </h4>
                        <button type="button ">LOTURI</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stiri -->
    <div class="main-wrapper">

    <header class = "page-title theme-bg-dark text-center">
        <h1 class = "heading" ><?php the_title();?></h1>
    </header>
        <article class = "content px-3 py-5 p-md-5">

        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
                the_time();
            }
        }
                            
        ?>

                            
        </article>

    </div>



    <!--- Footer -->
    <?php
    get_footer();
    ?>
 