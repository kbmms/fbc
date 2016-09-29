<?php /* Template Name: modelo-accordion-geral */ ?>  
<?php get_header(); ?> 
   <!-- MIGALHA -->
    <section class="container">
      <div class="migalha negrito margem-15-lat a-esq">
        <h3>FBC</h3>
        <div id="viewlet-above-content"><div id="portal-breadcrumbs">
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
             
           <span class="anterior">       
              <a href="http://novosite.fbc-ba.com.br/assistencia-ao-paciente">Assistência ao Paciente</a>
           </span>
    
    </span>
    <span id="breadcrumbs-3" dir="ltr">          
            <span class="anterior">       
            <a href="http://novosite.fbc-ba.com.br/assistencia-ao-paciente/servicos-de-apoio">Convenios </a>
           </span>     
    </span>
    <span id="breadcrumbs-4" dir="ltr">
            <span id="breadcrumbs-current" class="atual">Modelo Accordion Convênios</span>
    </span>
  </div>
<div id="plone-lock-status">
  
</div>
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
<div class="container">

      <!-- LADO ESQUERDO -->
      <div class="col-md-3">

        <!-- SUBMENU -->
        <aside class="menu-interno">
          <ul class="submenu negrito">
        <?php
        $args = array(
          'order' => 'ASC',
          'post_type' => 'page',
          'post_parent' => $post->post_parent,
          'post_status' => 'publish',
          'posts_per_page' => -1
        );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <li>
               <a class="hover atual" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>          
            </li>
        <?php endforeach; wp_reset_postdata();?>
          </ul>
        </aside>
        <div class="clear"></div>

        <!-- FIM SUBMENU -->

      </div>
      <!-- FIM LADO ESQUERDO -->

      <!-- LADO DIREITO -->
      <div class="col-md-9 col-xs-12">
<section class="conteudo aumentar-fonte leve-regular lar-720 margem-15-lat">
          <article>          
            
            <div class="margin-10-base"></div>
             <ul class="lista">
                       
  

               <li class="item">

                <div class="accordion"><?php the_title(); ?></div>
                <div class="informacoes">
                 <?php the_content(); ?>
                </div>
               </li>
                   <?php wp_reset_postdata();?>   
            </ul>            
          </article>

          <div id="passador" class="passadores negrito">
    
 
    <div class="clear"></div>
</div>
        </section>        

      </div>    
        <div class="clear"></div>
      </div>

<?php endwhile; ?>

<?php else: ?>

  <!-- article -->
  <article>

    <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

  </article>
  <!-- /article -->

<?php endif; ?>

    </section>
    <!-- FIM EXAMES, INFERNAÇÃO, CONVÊNIOS E PARCEIROS -->

    <!-- PONTILHADO -->
    <div class="bg-pontilhado2"></div>
    <!-- FIM PONTILHADO -->

    <!-- FIM SECTIONS -->
<?php get_footer(); ?> 