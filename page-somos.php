<?php
// Template Name: quem_somos
?>
<?php get_header()?>

<main class="container quem-somos min-h-600">
        <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item font-inter fw-normal"><a class="text-Prata-2" href="<?php echo home_url('/');?>">Home</a></li>
                <li class="breadcrumb-item font-inter fw-normal text-Prata-2 active" aria-current="page">Sobre</li>
            </ol>
        </nav>
        <div class="title-page">
          <h1 class="font-inter fw-bold fz-44 py-2 m-0 text-Secondary-main text-break"><?php the_field('titulo')?></h1>
        </div>
        <section class="py-3">
                <div class="content py-5">
                <?php the_content();?>
                </div>   
        </section>
    </main>

<?php get_footer()?>