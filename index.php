<?php get_header()?>
<style>
  .banner {
    background: linear-gradient(90deg, black 12%, rgba(0, 0, 0, 0) 100%), url(<?php echo get_template_directory_uri();?>/dist/image/Genipabu-2.svg) no-repeat;
    background-size: cover;
    background-position: right;
  }
</style>
<main>
        <section class="banner min-h-600 bg-Ui-Color-Primary pb-5">
          <div class="container px-3 px-sm-2 py-awe-90">
            <div class="row">
              <div class="col-12 col-md-8 col-lg-6 title-banner">
                <h1 class="font-lato fw-bold  text-Primary-main fz-48 my-4">PASSEIO DE BUGGY PELAS PRAIAS DE GENIPABU</h1>
                <p class="font-lato fw-normal fz-18 text-neve my-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt quam ipsa commodi tempora! Impedit modi dicta officia! Aliquid rerum voluptates sint quis minima labore fugiat et reprehenderit. Explicabo, dolores eius.</p>
                <a class="font-lato text-decoration-none text-Secondary-main fw-normal px-5 py-3 rounded-1 bg-Primary-main d-inline-block my-4" href="#">QUER SABER MAIS?</a>
              </div>
            </div>
          </div>
        </section>
        <section class="fique-atual min-h-600">
          <div class="container px-3 px-sm-2 py-0 py-sm-awe-90">
            <div class="d-flex align-items-center flex-column flex-sm-row">
              <h2 class="font-inter fw-bold text-Secondary-main fz-21 my-0">PASSEIOS COM MUITA EMOÇÃO</h2>
            </div>
            
            <div class="row mt-2">
            <?php 
                      $args3 = array (
                        'post_type' => 'passeios',
                        'posts_per_page'=>'3',
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
            <div class="d-flex my-4">
              <a class="my-3 font-lato fw-normal border border-Ui-Color-Primary text-Ui-Color-Primary rounded-2 py-3 px-5 text-uppercase text-decoration-none d-inline-block" href="post.html">VEJA TODOS OS PACOTES</a>
            </div>
          </div>
          </section>
        <section class="somos min-h-600 bg-white">
          <div class="container px-3 px-sm-2 py-0 py-sm-awe-90">
            <div class="row py-5 justify-content-between">
              <div class="col-12 col-lg-6 py-5">
                <h2 class="font-inter fw-bold text-Aco fz-36 my-4">Alegria e emoção nas dunas de Natal</h2>
                <p class="font-lato fw-normal fz-21 text-prata my-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt quam ipsa commodi tempora! Impedit modi dicta officia! Aliquid rerum voluptates sint quis minima labore fugiat et reprehenderit. Explicabo, dolores eius.</p>
                <a class="font-lato rounded-1 text-center text-decoration-none text-neve fw-normal d-flex px-sm-5 d-sm-inline-block justify-content-center py-3 bg-conheca d-inline-block my-4" href="#">CONHEÇA A BUGGY NATAL</a>
              </div>
                <div class="col-12 col-lg-6 d-flex justify-content-center">
                    <img class="img-fluid shadow-img" src="<?php echo get_template_directory_uri();?>/dist/image/Dunas.png" alt="">
                </div>
            </div>
          </div>
        </section>
        
        
          <section class="eventos min-h-600 bg-white">
            <div class="container px-3 px-sm-2 py-5 pt-5">
              <h2 class="font-lato fw-bold text-center text-Secondary-main fz-21 my-4">VEJA NOSSA GALERIA</h2>
              <div class="grid-gallery">
              <?php 
                      $args1 = array (
                        'post_type' => 'galeria',
                        'posts_per_page'=>'5',
                    );
                      $the_query1 = new WP_Query ( $args1 );
            ?>
            <?php if ( $the_query1->have_posts() ) : while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?> 
                <div class="item-img"><img classe="" src="<?php the_field('img')?>" alt=""></div>
              <?php endwhile; else: endif; ?>
              </div>
              <div class="d-flex justify-content-end my-4">
                <a class="my-3 font-lato fw-normal border border-Ui-Color-Primary text-Ui-Color-Primary rounded-2 py-3 px-5 text-uppercase text-decoration-none d-inline-block" href="post.html">Ver mais</a>
              </div>
              
            </div>
              
          </section >
        <section class="fique-atual min-h-600 bg-fique">
        <div class="container px-3 px-sm-2 py-0 pb-3 pt-sm-awe-90">
          <div class="d-flex align-items-center flex-column flex-sm-row">
            <h2 class="font-inter fw-bold text-Secondary-main fz-21 my-0">ÚLTIMAS NOTÍCIAS DO BLOG</h2>
          </div>
          
          <div class="row mt-2">
          <?php 
                      $args3 = array (
                        'post_type' => 'post',
                        'posts_per_page'=>'3',
                    );
                      $the_query = new WP_Query ( $args3 );
          ?>
          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
            <div class="col-12 col-sm-6 col-md-4 py-3">
              <a href="<?php the_permalink()?>" class="text-decoration-none">
                <div class="card h-100 w-100 border-1 border-Secondary-main rounded-0" style="width: 18rem;">
                  <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top rounded-0', 'title' => 'post img']);?>
                  <div class="card-body pb-4">
                    <h3 class="font-lato fw-bold fz-16 text-Secondary-main"><?php the_title()?></h3>
                    <p class="card-text text-Dark-2 font-lato fz-14 py-2"><?php echo get_the_excerpt() ?></p>
                  </div>
                </div>
              </a>
            </div>
            <?php endwhile; else: endif; ?>
          </div>
          <div class="d-flex justify-content-end my-4">
            <a class="my-3 font-lato fw-normal border border-Ui-Color-Primary text-Ui-Color-Primary rounded-2 py-3 px-5 text-uppercase text-decoration-none d-inline-block" href="post.html">Ver mais</a>
          </div>
        </div>
        </section>
        <section class="py-awe-90">
          <div class="container">
            <div class="row px-3 px-sm-2 justify-content-center bg-Secondary-main py-5">
              <div class="col-12 col-sm-8 col-md-7 col-lg-6 col-xl-4 d-flex flex-column align-items-center">
                <h3 class="fz-21 text-center text-Primary-main font-lato fw-bold">Venha conhecer o melhor passeio de buggy do litoral potiguar</h3>
                <a class="font-lato rounded-1 text-center text-decoration-none text-Secondary-main fw-normal d-flex px-4 d-sm-inline-block justify-content-center py-3 bg-Primary-main d-inline-block my-4" href="#">MANDE UMA MENSAGEM</a>
              </div>
            </div>
          </div>
        </section>
    </main>



<?php get_footer()?>