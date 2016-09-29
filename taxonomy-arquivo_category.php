<?php   get_header(); ?>
<!-- ESTÁGIO E TRAINEE -->
<?php
$args=array(
    'hide_empty'        => 0,
    'parent'        => 0,
    'title_li' => '',
    'taxonomy'      => 'arquivo_category');
 $categories=get_categories($args);
?>
    <section class="container">
      <div class="migalha negrito margem-15-lat a-esq">
        <h3>Área Médica</h3>
        <div id="viewlet-above-content">
          <div id="portal-breadcrumbs">

        <div id="breadcrumbs">
         <div id="crumbs">
              <a href="<?php bloginfo('url'); ?>">Home</a> » <span class="current"><a href="/area-medica">Área Médica</a></span>
          </div>
          <div class="bread-arquivo">
          <?php echo wp_list_categories($args); ?>  
          </div>
          
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

    <!-- FIM ESTÁGIO E TRAINEE -->      
<br>
    <!-- INTERNATO, ESTÁGIOS, ARTIGOS E SESSÕES -->
    <section class="regular aumentar-fonte">
    
    <section class="area-downloads regular margem-45-base">

      <div class="container">
     <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>     
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
       <?php endwhile; else : ?>
        </div>
               <p><?php _e( 'Nenhum arquivo Cadastrado!' ); ?></p>
      <?php endif; ?>           
      </div>
    </section>
    </section>
    <!-- FIM INTERNATO, ESTÁGIOS, ARTIGOS E SESSÕES -->

    <!-- FIM CENTRALIZADO -->

    <!-- PONTILHADO -->
    <div class="bg-pontilhado2"></div>
    <!-- FIM PONTILHADO -->

    <!-- FIM SECTIONS -->
</div>
    </div>

    <?php get_footer() ?>