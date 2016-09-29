<?php get_header(); ?> 
   <!-- MIGALHA -->
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
    <!-- FIM MIGALHA -->

    <div class="margem-45-base"></div>



<div class="container">

      <!-- LADO ESQUERDO -->

  <div class="regular verde seta-verde seta-bread inline-block"><?php the_title() ?></div>
      <div class="col-md-3">
 
        <!-- SUBMENU -->
        <aside class="menu-interno">
          <ul class="submenu negrito">
      <?php
          $args = array(
            'order' => 'ASC',
            'post_type' => 'estrutura',
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
        $args = array('post_parent'=>$post->ID,'post_type'=>'attachment','post_mime_type'=>'image/jpeg');
        $my_attachments = get_posts($args);
             ?>
          <?php if($my_attachments): ?>
          <?php foreach($my_attachments as $image): ?>
            <a class="fancybox" rel="<?php the_title() ?>"  title="<?php echo $image->post_title ;?>" href="<?php echo $image->guid ;?>">
              <div class="imagemGaleria col-md-4 estrutura">
                  <?php  echo wp_get_attachment_image($image->ID,'thumbnail_slider'); ?>
                <p><?php echo $image->post_title ;?></p>
       
              </div>
            </a>
          <?php endforeach; ?>
            <?php else:?>
              <p>Nenhuma imagem foi inserida.</p>
         <?php endif;?>
   <!--       <div class="col-md-3">
           <div class="row">
             <?php the_post_thumbnail() ?>
           </div>
           <div class="row">
             <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
           </div>
         </div> -->
       
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