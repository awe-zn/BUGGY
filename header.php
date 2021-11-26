<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style-update.css">
    <?php wp_head();?>
    <title><?php bloginfo('name');?><?php if(!is_front_page()){echo" | ";}?><?php wp_title('');?></title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-Secondary-main">
        <div class="container py-3">
          <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri();?>/dist/image/REDE TISSE.svg" alt=""></a>
          <button class="toggler navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="span"></span>
            <span class="span"></span>
            <span class="span"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end font-inter" id="navbarNav">
            <ul class="navbar-nav ps-sm-3 w-100 d-flex justify-content-between align-items-center text-white">
              <div class="d-flex menu-Header justify-content-center align-items-center">
              <?php 
                        
                        $args_projetos = array(
                            'menu' => 'header-menu',
                                         );
                        wp_nav_menu( $args_projetos );
                     ?>
              </div>
              <div class="d-flex mt-lg-0 mt-3">
                <a class=" mx-3 text-Primary-main" href="">+55 84 9999.1234</a>
                <a href=""><i class="text-white fz-21 mx-2 fab fa-youtube-square"></i></a>
                <a href=""><i class=" text-white fz-21 mx-2 fab fa-instagram"></i></a>
                <a href=""><i class=" text-white fz-21 mx-2 fab fa-whatsapp"></i></a>
                
              </div>
            </ul>
          </div>
        </div>
      </nav>
</header>