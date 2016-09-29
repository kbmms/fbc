<?php /* Template Name: assistencia */ ?>  
<?php get_header(); ?> 
    <!-- MIGALHA -->
    <section class="container">
      <div class="migalha negrito margem-15-lat a-esq">
        <h3>FBC</h3>
        <div id="viewlet-above-content">
          <div id="portal-breadcrumbs">

            <div id="breadcrub">
              <span id="breadcrumbs-home" class="anterior">
                <a href="http://novosite.fbc-ba.com.br">HOME</a>
              </span>
              <span id="breadcrumbs-1" dir="ltr">
                <span class="anterior">       
                  <a href="http://novosite.fbc-ba.com.br">FBC</a>
                </span>
              </span>
              <span id="breadcrumbs-2" dir="ltr">
                <span id="breadcrumbs-current" class="atual">Assistência ao Paciente</span>
              </span>
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
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <!-- EXAMES, INFERNAÇÃO, CONVÊNIOS E PARCEIROS -->
    <section class="container">
      <div class="">

        <?php
        $args = array(
          'order' => 'ASC',
          'post_type' => 'assistencia',
          'post_parent' => 0,
          'post_status' => 'publish',
          'post_per_page' => -1
        );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          <div class="col-md-4 col-sm-6 col-xs-12">
           <img class="img-responsive" src="<?php the_field( "imagem_destaques" ); ?>" alt="">
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