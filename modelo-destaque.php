<?php /* Template Name: Destaques */ ?>  
<?php get_header(); ?> 
    <!-- MIGALHA -->
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="container">
      <div class="migalha negrito margem-15-lat a-esq">
        <h3><?php the_title() ?></h3>
        <div id="viewlet-above-content">
          <div id="portal-breadcrumbs">

        <div id="breadcrumbs">
         <?php wp_custom_breadcrumbs(); ?>
        </div> 
          </div>
          <div id="plone-lock-status"></div>
        </div>
      </div>
      <div class="letra margem-15-lat a-dir">
        <div class="mais"></div>
        <div class="normal"></div>
        <div class="menos"></div>
      </div>
      <div class="clear"></div>
    </section>
    <!-- FIM MIGALHA -->

    <div class="margem-45-base"></div>

    <!-- EXAMES, INFERNAÇÃO, CONVÊNIOS E PARCEIROS -->
    <section class="container">
      <div class="">

        <?php
        $args = array(
          'order' => 'ASC',
          'post_type' => 'page',
          'exclude' => 270,
          'post_parent' => $post->ID,
          'post_status' => 'publish',
          'posts_per_page' => -1
        );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-2 aumentar-fonte boxes">
         <!--  <?php the_post_thumbnail(); ?> -->
         <img class="img-responsive" src="<?php the_field( "imagem_destaques" ); ?>" alt="<?php the_permalink(); ?>">
              <a class="hover" href="<?php the_permalink(); ?>"></a>
              <div class="seta-verde">
                <a class="hover" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  
              </div>          
          </div>
        <?php endforeach; wp_reset_postdata();?>
        <div class="clear"></div>
      </div>
    </section>

    <!-- FIM EXAMES, INFERNAÇÃO, CONVÊNIOS E PARCEIROS -->
    <br><br><br><br>
    <?php 
      if(is_page('pesquisa-e-extensao')){
        get_template_part( 'templates-parts/blog/blog');        
      }
     ?>

<?php endwhile; ?>

<?php else: ?>

  <!-- article -->
  <article>

    <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

  </article>
  <!-- /article -->

<?php endif; ?>


    
    <!-- PONTILHADO -->
    <div class="bg-pontilhado2"></div>
    <!-- FIM PONTILHADO -->

    <!-- FIM SECTIONS -->
<?php get_footer(); ?> 