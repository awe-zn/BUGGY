<footer>
      <style>
        .menu-footer{
          list-style: none!important;
        }
        .menu-footer li{
          padding:3px 0!important;
        }
        .menu-footer a{
          font-family: 'inter';
          font-size: 16px;
          
          text-decoration: none!important;
          color: #343A40!important;
        }
      </style>
      <?php if(!is_front_page()) {?>
      <nav>
        <div class="container py-awe-36">
          <div class="row justify-content-end">
            <div class="col-7 col-sm-12 col-md-9 col-lg-7 d-flex justify-content-end justify-sm-content-center align-items-center mt-4 mt-md-0">
              <?php 
                        
                        $args_footer = array(
                            'menu' => 'footer-menu',
                            'container' => 'ul',
                            'menu_class' => 'menu-footer flex-column flex-sm-row'
                                         );
                        wp_nav_menu( $args_footer );
                     ?>
                <!-- <li class="list-group-item text-uppercase px-2 py-1 bg-transparent border-0 fz-14 fw-normal font-inter text-Dark-1"><a href=""></a>Blog</li>
                <li class="list-group-item text-uppercase px-2 py-1 bg-transparent border-0 fz-14 fw-normal font-inter text-Dark-1"><a href=""></a>Passeios</li>
                <li class="list-group-item text-uppercase px-2 py-1 bg-transparent border-0 fz-14 fw-normal font-inter text-Dark-1"><a href=""></a>Galeria</li>
                <li class="list-group-item text-uppercase px-2 py-1 bg-transparent border-0 fz-14 fw-normal font-inter text-Dark-1"><a href=""></a>Sobre</li> -->
            </div>
          </div>
        </div>
      </nav>
      <?php } ?>
      <div class="bg-Neve-Dark d-flex justify-content-center py-3">
        <a class="text-decoration-none" href="">
          <img src="<?php echo get_template_directory_uri();?>/dist/image/logo-v2.svg" alt="">
        </a>
      </div>
    </footer>
    <?php wp_footer();?>
    <script src="<?php echo get_template_directory_uri();?>/dist/js/bootstrap.bundle.js"></script>
    
</body>
</html>
  
