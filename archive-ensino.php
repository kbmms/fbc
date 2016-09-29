<?php  /* Template Name: ensino */ get_header(); ?>
<!-- ESTÁGIO E TRAINEE -->
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="container">
      <div class="migalha negrito margem-15-lat a-esq">
        <h3><?php the_title() ?></h3>
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

        <div class="col-md-6 col-sm-6 col-xs-12">
         
          <a class="hover" href="estagio-curricular-de-extensao">
            <img alt="Estágio Curricular de Extensão" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/ensino/estagio-curricular-de-extensao.jpg"  title="Estágio Curricular de Extensão" />
          </a>
          <div class="seta-verde">
            <a class="hover" href="estagio-curricular-de-extensao">Estágio Curricular de Extensão</a>  
          </div>
                  
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
         
          <a class="hover" href="trainee-de-enfermagem">
            <img alt="Trainee de Enfermagem" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/ensino/trainee-de-enfermagem.jpg"  title="Trainee de Enfermagem" />
          </a>
          <div class="seta-verde">
            <a class="hover" href="trainee-de-enfermagem">Trainee de Enfermagem</a>  
          </div>
                  
        </div>
        <div class="clear"></div>
      </div>
    </section>
    <!-- FIM ESTÁGIO E TRAINEE -->      

    <!-- INTERNATO, ESTÁGIOS, ARTIGOS E SESSÕES -->
    <section class="bg-pontilhado regular aumentar-fonte">
      <div class="container">
        <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-3">
         
          <a class="hover" href="internato-medico">
            <img alt="Internato Médico" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/ensino/internato-medico.jpg"  title="Internato Médico" />
          </a>
          <div class="seta-verde">
            <a class="hover" href="internato-medico">Internato Médico</a>  
          </div>
                 
        </div>
        <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-3">
         
          <a class="hover" href="estagio-em-cardiologia">
            <img alt="Sessão de Atualização em Cardiologia" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/ensino/sessao-de-atualizacao-em-cardiologia.jpg" title="Sessão de Atualização em Cardiologia" />
          </a>
          <div class="seta-verde">
            <a class="hover" href="estagio-em-cardiologia">Sessão de Atualização em Cardiologia</a>  
          </div>
                 
        </div>
        <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-3">
         
          <a class="hover" href="artigos-medicos">
            <img alt="Artigos Médicos" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/ensino/artigos-medicos.jpg"  title="Artigos Médicos" />
          </a>
          <div class="seta-verde">
            <a class="hover" href="artigos-medicos">Artigos Médicos</a>  
          </div>
                 
        </div>
        <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-6 col-xs-offset-3">
         
          <a class="hover" href="sessoes-semanais">
            <img alt="Sessões Semanais" class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/ensino/sessoes-semanais.jpg" title="Sessões Semanais" />
          </a>
          <div class="seta-verde">
            <a class="hover" href="sessoes-semanais">Sessões Semanais</a>  
          </div>
                 
        </div>
        <div class="clear"></div>
      </div>
    </section>
    <!-- FIM INTERNATO, ESTÁGIOS, ARTIGOS E SESSÕES -->

       
<?php get_template_part( 'templates-parts/blog/blog'); ?>

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