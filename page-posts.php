<?php
// Template Name: posts
?>
<?php get_header()?>

<main class="container quem-somos min-h-600">
        <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="#">Home</a></li>
                <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="#">Blog</a></li>
            </ol>
        </nav>
        <?php 
                      $args3 = array (
                        'post_type' => 'post'
                    );
                      $the_query = new WP_Query ( $args3 );
          ?>
          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
        <section>
          <div class="title-page">
           
            <a href="<?php the_permalink()?>" class="text-decoration-none text-Secondary-main font-inter fw-bold fz-44 py-4 m-0 text-break"><?php the_title()?></a>
        </div>
        <div class="py-3">
                <span class="font-lato fw-bolder fst-italic fz-16 text-end text-Dark-1 d-block my-2 fst-italic">Postado em <?php echo get_the_date('d M Y'); ?></span>
                <div class=" py-5">
                  <p class="font-anton fz-21 text-Dark-2 mb-5"><?php echo get_the_excerpt()?></p>
                    <div class="d-flex justify-content-center px-3 px-sm-5">
                    <?php the_post_thumbnail('full', ['class' => 'img-fluid', 'title' => 'post img']);?>
                    </div> 
                </div>
              </div>
        </section>
        <?php endwhile; else: endif; ?>
    </main>

    <?php get_footer()?>