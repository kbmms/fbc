<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?> 

<div class="container-fluid">
	<div class="container">
    <?php if ( have_posts() ) : ?>

    <header class="page-header text-center">
      <h1 class="page-title"><?php printf( __( 'Resultados por: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </header><!-- .page-header -->

	 <?php while ( have_posts() ) : the_post(); ?>
		<div class="resultado-busca">
			<div class="title">
				<a href="<?php the_permalink() ?> "><?php the_title() ?></a>
			</div>
		</div>
     <?php endwhile; ?>
</div>


        <?php else : ?>
        <div class="nada-encontrado text-center">
        <br>
        
        <h1>Nenhum resultado foi encontrado.</h1>
        <p><a href="<?php bloginfo('url'); ?>">Voltar para home</a></p>
        <br>
        </div>


        <?php endif; ?>
      </div>     	
	</div>
</div>

<?php get_footer(); ?> 