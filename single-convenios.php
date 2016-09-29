<?php get_header(); ?>
<div class="container">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="container">
      <div class="migalha negrito margem-15-lat a-esq">
        <h3><?php the_title() ?></h3>
        </div>
            <div class="letra margem-15-lat a-dir">
        <div class="mais"></div>
        <div class="normal"></div>
        <div class="menos"></div>
      </div>
      <div class="clear"></div>
        <div id="breadcrumbs" class="margem-15-lat">
   <?php wp_custom_breadcrumbs(); ?>
  </div> 
    </section>  
      <!-- LADO ESQUERDO -->
      <div class="col-md-3">

        <!-- SUBMENU -->
        <aside class="menu-interno">
          <ul class="submenu negrito">
 <?php wp_list_post_types2($args2) ?>
          </ul>
        </aside>
        <div class="clear"></div>

        <!-- FIM SUBMENU -->

      </div>
      <!-- FIM LADO ESQUERDO -->


<?php get_posts() ?>
      <!-- LADO DIREITO -->
      <div class="col-md-9 col-xs-12">
<section class="conteudo aumentar-fonte leve-regular lar-720 margem-15-lat">
          <article>          
            
            <div class="margin-10-base"></div>
             <ul class="lista">         
                 <?php the_content(); ?>
            </ul>            
          </article>

          <div id="passador" class="passadores negrito">
    
 
    <div class="clear"></div>
</div>
        </section> 

<?php endwhile; ?>

<?php else: ?>   
  <article>

    <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

  </article>              
       
<?php endif; ?>
      </div>    
        <div class="clear"></div>
      </div>

      <?php get_footer() ?>