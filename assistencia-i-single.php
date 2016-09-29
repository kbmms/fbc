<?php /* Template Name: assistencia-single */ ?>  
<?php get_header(); ?>
<div class="container">
<h1>assistencia-i-single.php</h1>
      <!-- LADO ESQUERDO -->
      <div class="col-md-3">

        <!-- SUBMENU -->
        <aside class="menu-interno">
          <ul class="submenu negrito">

                  <?php
        $parent_id = wp_get_post_parent_id( $post->ID );
        $args = array(
          'order' => 'ASC',
          'post_type' => 'page',
     
          'post_status' => 'publish',
          'post_per_page' => -1
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


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <!-- LADO DIREITO -->
      <div class="col-md-9 col-xs-12">
<section class="conteudo aumentar-fonte leve-regular lar-720 margem-15-lat">
          <article>          
            
            <div class="margin-10-base"></div>
             <ul class="lista">


               <li class="item">
               <div class="regular verde seta-verde inline-block"><?php the_title(); ?></div>
                <div class="accordion"><?php the_title() ?></div>
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