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
    <div class="col-md-9 col-xs-12 ">
         <section class="conteudo aumentar-fonte leve-regular lar-720 margem-15-lat">
          <article>          
            
            <div class="margin-10-base"></div>
             <ul class="lista">
                       
                      <?php
        $args = array(
          'order' => 'ASC',
          'post_type' => 'convenios',
          'post_status' => 'publish',
          'posts_per_page' => -1
        );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

               <li class="item">

                <div class="accordion" id="open"><?php the_title(); ?></div>
                <div class="informacoes">
                 <?php the_content(); ?>
                </div>
               </li>
                   <?php endforeach; wp_reset_postdata();?>   
            </ul>            
          </article>

          <div id="passador" class="passadores negrito">
    
 
    <div class="clear"></div>
</div>
        </section>

      </div>
  


<!-- 
 <section class="conteudo aumentar-fonte leve-regular lar-720 margem-15-lat">


 <div class="col-md-9 col-xs-12 ">
           <article>   

            
            <div class="margin-10-base"></div>
             <ul class="lista">
<?php
$btpgid=get_queried_object_id();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array( 'posts_per_page' => 15,
'paged' => $paged,'post_type' => 'convenios' );
    $postslist = new WP_Query( $args );

    if ( $postslist->have_posts() ) :
        while ( $postslist->have_posts() ) : $postslist->the_post(); 
?>

              <li class="item">

                <div class="accordion" id="open"><?php the_title(); ?></div>
                <div class="informacoes">
                 <?php the_content(); ?>
                </div>
               </li>
                  
               <?php

         endwhile;  

             next_posts_link( 'Anterior', $postslist->max_num_pages );
             previous_posts_link( 'Próxima' ); 
        wp_reset_postdata();
    endif;
    ?>
       </ul> 
     </article>
</div>

     </section>
 -->





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