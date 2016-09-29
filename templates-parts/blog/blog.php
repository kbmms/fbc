<!-- ARTIGOS -->
    <section class="container text-center">
     <?php
$args2 = array(
'category_name' => 'estudos',
'type' => 'post',
'posts_per_page' => 3
);
      $query = new WP_Query( $args2 );
     // Check that we have query results.
      if ( $query->have_posts() ) {
       
          // Start looping over the query results.
          while ( $query->have_posts() ) {
       
              $query->the_post(); ?>
    

      <article class="col-md-4 col-xs-12 blog aumentar-fonte">
        <a class="hover text-center" href="<?php the_permalink() ?> ">
<?php 
the_post_thumbnail()
 ?>
        </a>
        <h3 class="titulo text-left">
          <a class="hover" href="<?php the_permalink() ?>"><?php the_title() ?></a>
        </h3>
        <div class="text-left">
        <p>
          <a class="hover" href="<?php the_permalink() ?>"><?php the_excerpt() ?></a>
        </p>          
        </div>

      </article>
        <?php } } wp_reset_postdata(); ?>
       </section>
    <!-- FIM ARTIGOS -->