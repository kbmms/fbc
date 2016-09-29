<?php get_header(); ?> 
    <!-- SECTIONS -->

    <!-- CONVENIOS E MARCAÇÃO -->
    <section class="container">
      <div class="col-md-3 col-xs-12">
        <div class="regular seta-verde inline-block">
          <a class="hover" href="<?php bloginfo('url'); ?>/assistencia-ao-paciente/convenios/">Convênios</a>  
        </div>  
        <div class="busca-convenios">
          <div class="style-select2">
            <select class="select2" id="userNav" name="URL" onchange="if (this.value) window.open(this.value, '_self');">
              <option>Busque seu Convênio *</option>
              <?php
        $args = array(
          'order' => 'ASC',
          'post_type' => 'convenios',
          'post_status' => 'publish',
          'posts_per_page' => -1
        );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <option value="<?php the_permalink(); ?> "><?php the_title() ?></option>
        <?php endforeach; wp_reset_postdata();?>
            </select>              
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-sm-6 col-xs-6">
             
         
          <a class="hover" href="<?php bloginfo('url'); ?>/a-fbc/estrutura/">
            <img alt="Estrutura" class="img-responsive" style="width:100%;" src="<?php bloginfo('template_url'); ?>/images/estrutura.jpg" title="Estrutura" />
          </a>
          <div class="seta-verde">
            
          </div>
                 
    
      </div>
      <div class="col-xs-6 visible-xs">
        <img src="<?php bloginfo('template_url'); ?>/images/emerg2_03.jpg" class="img-responsive" style="width:100%;" alt="">
      </div>        


      <div class="col-md-6 col-sm-12 col-xs-12 col-xs-offset-0 hidden-xs">
        <img alt="Marcação" class="img-responsive" style="width:100%;" src="<?php bloginfo('template_url'); ?>/images/emergencia2.jpg" title="Marcação" />
      </div>
      <div class="clear"></div>
    </section>
    <!-- FIM CONVENIOS E MARCAÇÃO -->

    <!-- ASSISTÊNCIA, ENSINO, PESQUISA E EXTENSÃO -->
    <section class="bg-pontilhado regular container-fluid">
      <div class="container">
      <?php
       
      $args = array(
          'post_type' => 'page',
          'post__not_in' => array(238,212,234,286,859),
          'post_parent' => '0',
           'orderby' =>  'menu_order'
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
        
              <?php if ($i <= 6) { ?>
           <div class="servicos col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-0">
            <figure>
                <a class="hover" href="<?php the_permalink() ?> ">
                    <?php the_post_thumbnail(); ?>
                </a>           
            </figure>
            <div class="seta-verde">
                <a class="hover" href="<?php the_permalink() ?> "><?php the_title(); ?></a>  
            </div>
          </div>
          <?php

         }else { ?>

          <div class="servicos col-md-6 col-sm-6 col-xs-12">
            <figure>
                <a class="hover" href="<?php the_permalink() ?> ">
                    <?php the_post_thumbnail(); ?>
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

    <!-- FIM SECTIONS -->
    <?php get_footer(); ?> 