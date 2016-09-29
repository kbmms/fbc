<?php  /* Template Name: Área Médica */ get_header(); ?>
<!-- ESTÁGIO E TRAINEE -->
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="container">
      <div class="migalha negrito margem-15-lat a-esq">
        <h3>Área Médica</h3>
        <div id="viewlet-above-content">
          <div id="portal-breadcrumbs">

        <div id="breadcrumbs">
         <?php wp_custom_breadcrumbs(); ?>
        </div> 
          </div>
          <div id="plone-lock-status"></div>
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
    <section class="regular">
      <div class="container aumentar-fonte">
<?php
$args=array(
    'hide_empty'        => 0,
    'parent'        => 0,
    'title_li' => '',
    'taxonomy'      => 'arquivo_category');
 $categories=get_categories($args);
?>

        <div class="col-md-6 col-sm-6 col-xs-12">
         
          <a class="hover" href="/arquivo_category/sessoes-semanais">
            <img alt="Estágio Curricular de Extensão" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/sessoes-semanais.jpg"  title="Estágio Curricular de Extensão" />
          </a>
          <div class="seta-verde">
            <a class="hover" href="/arquivo_category/sessoes-semanais">Sessões Semanais</a>  
          </div>       
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
         
          <a class="hover" href="/arquivo_category/outros-arquivos">
            <img alt="Trainee de Enfermagem" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/outros-arquivos.jpg"  title="Trainee de Enfermagem" />
          </a>
          <div class="seta-verde">
            <a class="hover" href="/arquivo_category/outros-arquivos">Outros Arquivos</a>  
          </div>
                  
        </div>
        <div class="clear"></div>
      </div>

    </section>
    <!-- FIM ESTÁGIO E TRAINEE -->      
<br>
    <!-- INTERNATO, ESTÁGIOS, ARTIGOS E SESSÕES -->
    <section class="regular aumentar-fonte">
<section class="area-downloads regular margem-45-base">
      <div class="container">

      <?php 
      $args = array(
                'order' => 'ASC',
                'post_type' => 'area-medica',
                'post_status' => 'publish',
                'posts_per_page' => -1
              );
              $myposts = get_posts( $args );
              foreach ( $myposts as $post ) : setup_postdata( $post ); ?>      
     <hr>
        <article>
          <div class="botao col-md-12">
            <a class="hover btn-down" href="<?php the_field('adicione_o_arquivo') ?> "></a>
          </div>
          <div class="col-md-12">
            <h3><a class="hover" href="<?php the_field('adicione_o_arquivo') ?> "><?php the_title() ?></a></h3>
           <?php the_content() ?>       
          </div>
          <div class="clear"></div>
        </article>
   
        <?php endforeach; wp_reset_postdata();?>             
      </div>
    </section>
    </section>
    <!-- FIM INTERNATO, ESTÁGIOS, ARTIGOS E SESSÕES -->

<?php endwhile; ?>

<?php else: ?>

  <!-- article -->
  <article>

    <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

  </article>
  <!-- /article -->

<?php endif; ?>

    <!-- FIM CENTRALIZADO -->

    <!-- PONTILHADO -->
    <div class="bg-pontilhado2"></div>
    <!-- FIM PONTILHADO -->

    <!-- FIM SECTIONS -->
</div>
    </div>

    <?php get_footer() ?>