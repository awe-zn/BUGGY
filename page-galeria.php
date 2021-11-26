<?php
// Template Name: galeria
?>
<?php get_header()?>
<main class="container px-3 px-sm-2 min-h-600">
        <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="#">Home</a></li>
                <li class="breadcrumb-item font-inter fw-normal text-Prata-2 active" aria-current="page">Galeria</li>
            </ol>
        </nav>
        <div class="title-page">
            <h1 class="font-inter fw-bold fz-44 py-2 m-0 text-Secondary-main text-break">Nossa galeria de fotos</h1>
        </div>
        <section class="pesquisadores py-2">
                <div class="row pt-5 gy-5">
                <?php 
                      $args1 = array (
                        'post_type' => 'galeria'
                    );
                      $the_query1 = new WP_Query ( $args1 );
            ?>
            <?php if ( $the_query1->have_posts() ) : while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?> 
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 galery-img">
                        <img class="img-fluid" src="<?php the_field('img')?>" alt="">
                        <p class="my-4"><?php the_title()?></p>
                      </div>
              <?php endwhile; else: endif; ?>
                </div>
                
        </section>
    </main>

<?php get_footer()?>