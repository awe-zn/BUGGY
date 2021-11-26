
<?php get_header()?>
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
<main class="quem-somos container  min-h-600">
        <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="#">Home</a></li>
                <li class="breadcrumb-item d-sm-block d-none font-inter fw-normal text-Prata-2 w-50 text-overflow-ellipsis active" aria-current="page"><?php the_title()?>          </ol>
        </nav>
        <div class="title-page">
          <h1 class="font-inter fw-bold fz-44 py-2 m-0 text-Secondary-main text-break"><?php the_title()?></h1>
        </div>
        <section class="py-3">
                <span class="font-lato fw-bolder fst-italic fz-16 text-end text-Dark-1 d-block my-2 fst-italic">Postado em <?php echo get_the_date('d M Y'); ?></span>
                <div class="content py-5">
                <?php the_content();?>
                </div>
        </section>
        <section class="posts my-awe-90 alinhar">

          <div class="grad-line">
            <h4 class="text-prata fz-16 font-inter fw-normal py-3 m-0">mais notícias recentes</h4>
          </div>
          <?php
                       $args3 = array(
                         'post_type' => 'post',
                         'posts_per_page' => '6'
                     );
                       $the_query3 = new WP_Query ( $args3 );
                   ?>
          <?php if ( $the_query3->have_posts() ) : while ( $the_query3->have_posts() ) : $the_query3->the_post(); ?>
          <div class="grad-line pt-3">
            <a href="<?php the_permalink()?>" class="text-decoration-none">
            <span class="font-inter fz-14 text-Prata-2">publicado em <span><?php echo get_the_date('d M Y'); ?></span></span>
            <h3 class="my-3 text-Secondary-main font-inter fz-21 fw-bold"><?php the_title()?></h3>
          </a>
          </div>
          <?php endwhile; else: endif; ?>
        </section>
    </main>
    <?php endwhile; else: endif;?>
 <?php get_footer()?>