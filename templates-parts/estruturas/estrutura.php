<div class="container">

      <!-- LADO ESQUERDO -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
       <!-- MIGALHA -->
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
    <!-- FIM MIGALHA -->
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
            <li class="menu1">    
               <a class="hover" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endforeach; wp_reset_postdata();?>
          </ul>

        </aside>
        <div class="clear"></div>

        <!-- FIM SUBMENU -->

      </div>
      <!-- FIM LADO ESQUERDO -->
    


      <!-- LADO DIREITO -->
      <div class="col-md-9 col-xs-12 aumentar-fonte">
        <?php
        $args = array(
          'order' => 'ASC',
          'post_type' => 'estrutura',
          'post_status' => 'publish',
          'posts_per_page' => -1
        );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>  
        <a href="<?php the_permalink() ?> ">
         <div class="col-md-4 estrutura">
             <?php the_post_thumbnail() ?>    
             <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
           </div>        
        </a>    
      <?php endforeach; wp_reset_postdata();?> 
         </div>
  
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