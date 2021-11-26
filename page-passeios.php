<?php
// Template Name: passeio
?>
<?php get_header()?>
<main class="container px-3 px-sm-2 min-h-600">
        <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="#">Home</a></li>
                <li class="breadcrumb-item font-inter fw-normal text-Prata-2 active" aria-current="page">Passeios</li>
            </ol>
        </nav>
        <div class="title-page">
            <h1 class="font-inter fw-bold fz-44 py-2 m-0 text-Secondary-main text-break">Pacotes de Passeios</h1>
        </div>
        <section class="pesquisadores py-2">
                <h2 class="font-lato fw-bold fz-21 text-Secondary-main py-5">PASSEIOS EM DESTAQUE</h2>
                <div class="row gy-5"> 
                <?php 
                      $args3 = array (
                        'post_type' => 'passeios'
                    );
                      $the_query = new WP_Query ( $args3 );
            ?>
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
            <div class="col-12 col-sm-6 col-md-4 py-3">
                <a href="post.html" class="text-decoration-none">
                  <div class="card w-100 border-1 rounded-3 border-Gray rounded-0" style="width: 18rem;">
                    <img src="<?php the_field('img')?>" class="card-img-top rounded-0" alt="...">
                    <div class="card-body pb-4">
                      <p class="card-text text-Dark-1 font-lato fz-16 mb-2"><?php the_title() ?></p>
                      <span class="text-Dark-3 font-lato fz-14"><?php the_field('detalhes')?></span>
                      <h3 class="fz-26 font-lato fw-bold text-Dark-1 mt-4"><?php the_field('preco')?></h3>
                      <div class="row justify-content-between pt-3">
                        <div class="col-6"><a class="font-lato w-100 d-flex justify-content-center fz-14 fw-normal bg-Primary-main text-Secondary-main rounded-2 py-2 px-4 text-uppercase text-decoration-none d-inline-block" href="post.html">AGENDAR</a></div>
                        <div class="col-6"><a class="font-lato w-100 d-flex justify-content-center fz-14 fw-normal border border-Dark-1 text-Dark-1 rounded-2 py-2 px-4 text-uppercase text-decoration-none d-inline-block" href="post.html">DETALHES</a></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
                      <?php endwhile; else: endif; ?>
                </div>
                
        </section>
    </main>

<?php get_footer()?>