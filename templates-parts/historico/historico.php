<div class="container">

      <!-- LADO ESQUERDO -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
     <!-- MIGALHA -->
    <section class="container">
      <div class="migalha negrito margem-15-lat a-esq">
        <h3>FBC</h3>
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
 
  <div class="regular verde seta-verde seta-bread inline-block"><?php the_title() ?></div>
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
    <?php endwhile; ?>

    <?php else: ?>

      <!-- article -->
      <article>

        <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

      </article>
      <!-- /article -->

    <?php endif; ?>


      <!-- LADO DIREITO -->
      <div class="col-md-9 col-xs-12">
<section class="cd-horizontal-timeline">
  <div class="timeline">
    <div class="events-wrapper">
      <div class="events">
      <ol>
        <?php 
        if ( have_posts() ) {
          $count = 0;
          while ( have_posts() ) {
            the_post();  ?>
          <?php $count++; ?>
                  <?php
          $args = array(
            'order' => 'ASC',
            'post_type' => 'post',
            'post_status' => 'publish',
            'post_per_page' => -1
          );

        $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
       <?php if ($count == 1) { ?>
      <li><a href="#0" data-date="<?php the_field('data_completa'); ?>" class="selected"><?php the_field('data'); ?></a></li>
       <?php  } else { ?>
      <li><a href="#0" data-date="<?php the_field('data_completa'); ?>"><?php the_field('data'); ?></a></li>
      <?php } ?>
             <?php $count = 0; ?>
                    <?php endforeach; wp_reset_postdata();?>

         <?php  } // endwhile;
        } // endif;
        ?>
                  
        </ol>

        <span class="filling-line" aria-hidden="true"></span>
      </div> <!-- .events -->
    </div> <!-- .events-wrapper -->
      
    <ul class="cd-timeline-navigation">
      <li><a href="#0" class="prev inactive">Prev</a></li>
      <li><a href="#0" class="next">Next</a></li>
    </ul> <!-- .cd-timeline-navigation -->
  </div> <!-- .timeline -->

  <div class="events-content">
    <ol>   

        <?php 
        if ( have_posts() ) {
           $count = 0;
          while ( have_posts() ) {
            the_post();  ?>
          <?php $count++; ?>
                  <?php
          $args = array(
            'order' => 'ASC',
            'post_type' => 'post',
            'post_status' => 'publish',
            'post_per_page' => -1
          );

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <?php if ($count == 1) { ?>
              <li class="selected" data-date="<?php the_field('data_completa'); ?>">
                <h2><?php the_title() ?></h2>
              <!--   <em><?php the_field('data_completa'); ?></em> -->
                <?php the_content() ?>
              </li>
        <?php  } else { ?>
              <li data-date="<?php the_field('data_completa'); ?>">
                <h2><?php the_title() ?></h2>
                <!--   -->
                <?php the_content() ?>
              </li>
         <?php } ?>
         <?php $count = 0; ?>
                 <?php endforeach; wp_reset_postdata();?>
         <?php  } // endwhile;
        } // endif;
        ?>

    </ol>
  </div> <!-- .events-content -->
</section>         

      </div> 
  
        <div class="clear"></div>
      </div>