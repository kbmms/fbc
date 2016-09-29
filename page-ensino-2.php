<?php get_header(); ?> 
    <!-- SECTIONS -->

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <!-- FIM CONVENIOS E MARCAÇÃO -->
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
    <!-- ASSISTÊNCIA, ENSINO, PESQUISA E EXTENSÃO -->
    <section class="regular container-fluid">
      <div class="container">
      <?php
       
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );
       
      // Custom query.
      $query = new WP_Query( $args );
 
      // Check that we have query results.
      if ( $query->have_posts() ) {
      $i = 0;
      // Start looping over the query results.
     while ( $query->have_posts() ) {
      $i++;
        $query->the_post(); ?>
        
              <?php if ($i <= 2) { ?>


          <div class="servicos col-md-6 col-sm-6 col-xs-12 aumentar-fonte">
            <figure>
                <a class="hover" href="<?php the_permalink() ?> ">
                 <img src="<?php the_field('imagem_destaques') ?>" alt="">  
                </a>           
            </figure>
            <div class="seta-verde">
              <a class="hover" href="<?php the_permalink() ?> "><?php the_title(); ?></a>  
            </div>
          </div>          
          <?php

         }else { ?>

           <div class="servicos col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0 aumentar-fonte">
            <figure>
                <a class="hover" href="<?php the_permalink() ?> ">
                     <img src="<?php the_field('imagem_destaques') ?>" alt="">  
                </a>           
            </figure>
            <div class="seta-verde">
                <a class="hover" href="<?php the_permalink() ?> "><?php the_title(); ?></a>  
            </div>
          </div>

              <?php  }     ?>

        <?php  

    } ?>
  
 
<?php }
 

      // Restore original post data.
      wp_reset_postdata();
       
      ?>
<!--       <div class="col-md-6 col-sm-6 col-xs-12">
          <a class="hover" href="contatos">
            <img alt="Contatos" width="100%" src="<?php bloginfo('template_url'); ?>/images/contato.jpg" title="Contatos">
          </a>
          <div class="seta-verde">
            <a class="hover" href="contatos">Contatos</a>  
          </div>        
      </div>
 -->
     
      </div>
    </section>
    <!-- FIM ASSISTÊNCIA, ENSINO, PESQUISA E EXTENSÃO -->

    <!-- MÉDICOS, TOUR VIRTUAL, ESPECIALIDADES -->
    <section class="container-fluid regular">
      <div class="container">

        <div class="clear"></div>
      </div>
    </section>
    <!-- FIM MÉDICOS, TOUR VIRTUAL, ESPECIALIDADES -->
    <br /><br />
    <!-- ARTIGOS -->
    <?php get_template_part( 'templates-parts/blog/blog'); ?>

    </section>
    <!-- FIM ARTIGOS -->
<?php endwhile; ?>

<?php else: ?>

  <!-- article -->
  <article>

    <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

  </article>
  <!-- /article -->

<?php endif; ?>

    <!-- FIM SECTIONS -->
    <?php get_footer(); ?> 