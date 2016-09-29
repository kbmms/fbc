<!DOCTYPE html PUBLIC
  "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes() ?> >
  <head>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fonts.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slider.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox-buttons.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox-thumbs.css" />
   <!--  <link rel="stylesheet" href="css/timeline.css" /> -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/horiz-timeline.css" />
     <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="FBC, Cardiologia, Federação Bahia de Cardiologia, Cardiologia Bahia, Cardiologista, Médico, Federação, Médico Salvador, Coração, Médico do Coração, Cardio" />
    <meta name="author" content="220i">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Todo conteúdo do site pode ser encontrado aqui." name="description" /> 

      <title>FBC</title>

        <!-- Disable IE6 image toolbar -->
        <meta http-equiv="imagetoolbar" content="no" />


         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
  </head>

<body>

    <!-- HEADER -->
    <header>
      <section class="info-topo visible-xs visible-sm">
        <div class="container">
        <div class="row info leve-regular text-center">
          <span>Seg a Sex, das 7h às 20h - Sábado, das 8h às 12h</span>
        </div>
        <div class="row links-int menu-mobile-topo">
        <ul>
          <li><a href="http://mail.fbc-ba.com.br" target="_blank" class="info webmail hover block a-esq regular">Webmail</a></li>
          <li><a class="info webmail hover block a-esq regular" href="<?php echo esc_url( home_url( '/' ) ); ?>fale-conosco">Fale Conosco</a></li>
          <li><a class="info webmail hover block a-esq  regular" href="<?php echo esc_url( home_url( '/' ) ); ?>trabalhe-conosco">Trabalhe Conosco</a></li>
          <li><a class="info webmail hover block a-esq  regular" href="<?php echo esc_url( home_url( '/' ) ); ?>pesquisa-de-satisfacao">Pesquisa de Satisfação</a></li>
        </ul>
       </div>
        <div class="clear"></div>
      </div>
      </section>

      <section class="info-topo interna hidden-xs hidden-sm">
        <div class="container">
        <div class="info horario a-esq leve-regular">
          <span>Seg a Sex, das 7h às 20h - Sábado, das 8h às 12h</span>
        </div>
        <div class="links-int a-dir ">
          <a href="http://mail.fbc-ba.com.br" target="_blank" class="info webmail hover block a-esq regular">Webmail</a>
          <a class="info webmail hover block a-esq sombra-esq regular" href="<?php echo esc_url( home_url( '/' ) ); ?>fale-conosco">Fale Conosco</a>
          <a class="info webmail hover block a-esq sombra-esq regular" href="<?php echo esc_url( home_url( '/' ) ); ?>trabalhe-conosco">Trabalhe Conosco</a>
          <a class="info webmail hover block a-esq sombra-esq regular" href="<?php echo esc_url( home_url( '/' ) ); ?>pesquisa-de-satisfacao">Pesquisa de Satisfação</a>
        </div>
        <div class="clear"></div>
      </div>
      </section>
      <!-- LOGO, EMERGÊNCIA, BUSCA-->
       <nav class="navbar navbar-default hidden-md visible-xs hidden-lg">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>">FBC</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse menu-mobile" id="bs-example-navbar-collapse-1">
    <ul>
    <?php wp_list_pages( array( 'include'  => array( 286, 22, 242, 277, 859 ),
    'title_li' => '' ) ); ?>      
    </ul>
	 <form class="navbar-form navbar-left search-form" role="search" action="<?php bloginfo('url'); ?>" method="get">
	  <div class="form-group">
	    <input type="text" class="form-control" placeholder="Procurar" name="s">
	  </div>
	  <button type="submit" class="btn btn-default">Ok</button>
	</form>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>
      <section class="logo-e-busca">
      <div class="container logos-topo">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <a href="<?php bloginfo('url'); ?>" class="logo hover">
          <img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="FBC" />
        </a>        
      </div>
      <div class="hidden-md hidden-lg">
         
              <div class="row">
                <br /><br /><br /><hr />
              </div>
      </div>
      

        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="emergencia col-md-5 col-xs-12 col-sm-12">
          <a href="#">
            <img src="<?php bloginfo('template_url'); ?>/images/emergencia.jpg" alt="Emergência" />
          </a>
            
          </div>

          <div class="col-md-7 col-xs-12">
             <?php get_search_form(); ?>
          </div>          
        </div>
        <div class="clear"></div>
        </div>
      </section>        
      

      <!-- FIM LOGO, EMERGÊNCIA, BUSCA-->

      <!-- SLIDER -->
      <section class="bg-slider">
        <div class="interna mobile">
          <div id="slider">
          <!-- 'posts_per_page' => 10 -->
            <?php
                $args = array( 'post_type' => 'slider');
                $loop = new WP_Query( $args );
                ?>
            <?php  while( $loop->have_posts() ) : $loop->the_post(); ?>
            <img src="<?php the_field( "adicionar_imagem_para_slider" ); ?>" alt="<?php the_title(); ?>"> 

          <?php endwhile; ?>
          
          </div>
        </div>
      </section>
      <!-- FIM SLIDER -->





    </header>
    <!-- FIM HEADER -->
    <!-- NAVEGAÇÃO --> 
    <div class="pontilhados-2 hidden-sm hidden-xs"></div>
    <?php    

            wp_nav_menu(
                $args = array( 
                    'menu' => 'top', 
                    'container' => 'nav', 
                    'container_class' => 'menu menu-principal interna padding-53-0-17 leve-regular hidden-xs', 
                    'container_id' => 'MenuLavaLamp', 
                    'menu_class' => '', 
                    'menu_id' => '',
                    'echo' => true, 
                    'fallback_cb' => 'wp_page_menu', 
                    'before' => '', 
                    'after' => '', 
                    'link_before' => '', 
                    'link_after' => '', 
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0, 
                    'walker' => new WPDocs_Walker_Nav_Menu(),
                    'theme_location' => 'top' 
                )
            );

        ?>

<!-- <ul>
<?php wp_list_pages( array( 'include'  => array( 286, 22, 242, 277 ),
    'title_li' => '' ) ); ?>
</ul> -->

<!--     <nav class="menu interna padding-53-0-17 leve-regular hidden-xs hidden-sm" id="MenuLavaLamp">
        
        
        
         <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?> ">Home</a>
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>a-fbc/historico/">A FBC</a>
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>assistencia-ao-paciente">Assistência ao Paciente</a>
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>ensino-2">Ensino</a>
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>pesquisa-e-extensao">Pesquisa e Extensão</a>


         <a href="http://novosite.fbc-ba.com.br/area-medica">Área Médica</a>
         
         <span class="conteudo"></span>
        
        
     </nav> -->
    <!-- FIM NAVEGAÇÃO -->

    <div class="sombra hidden-xs hidden-sm"></div>    
    <div class="">
      <div>
  <!-- ========================== HEADER =========================== -->