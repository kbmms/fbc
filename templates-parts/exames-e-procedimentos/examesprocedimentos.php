<div class="container">
<!-- <h1>base1.PHP</h1> -->
      <!-- LADO ESQUERDO -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="breadcrumbs" class="margem-15-lat">
   <?php wp_custom_breadcrumbs(); ?>
  </div> 
  <div class="regular verde seta-verde seta-bread inline-block"><?php the_title() ?></div>
      <div class="col-md-3">

        <!-- SUBMENU -->
        <aside class="menu-interno">
          <ul class="submenu negrito">
 <?php wp_list_post_types($args) ?>
        </aside>
        <div class="clear"></div>

        <!-- FIM SUBMENU -->

      </div>
      <!-- FIM LADO ESQUERDO -->
    


      <!-- LADO DIREITO -->
      <div class="col-md-9 col-xs-12">
         <?php the_content() ?>

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