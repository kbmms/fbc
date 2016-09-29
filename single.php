<?php get_header(); ?> 
   <!-- MIGALHA -->
   <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="container" >
      <div class="migalha negrito margem-15-lat a-esq">
          <h3>FBC</h3>
          <div id="viewlet-above-content">
            <div id="portal-breadcrumbs">
              <div id="breadcrumbs" class="margem-15-lat">
               <?php wp_custom_breadcrumbs(); ?>
              </div>  
              <div id="plone-lock-status">
                
              </div>
            </div>
          </div>
        <div class="letra margem-15-lat a-esq">
          <div class="mais"></div>
          <div class="normal"></div>
          <div class="menos"></div>
        </div>
        <div class="clear"></div>
      </div>
    </section>
    <!-- FIM MIGALHA -->

    <div class="margem-45-base"></div>

<div class="container"  >

      <!-- LADO ESQUERDO -->
      <div class="col-md-3" >

        <!-- SUBMENU -->
<aside class="menu-interno">
<script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 0;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if ('https:' === document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script><a href="http://www.printfriendly.com" style="color:#fff;text-decoration:none;background: #a6bd89;padding: 10px 5px;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF">Imprimir ou Indicar a um Amigo</a>
           
        </aside>
        <div class="clear"></div>

        <!-- FIM SUBMENU -->

      </div>
      <!-- FIM LADO ESQUERDO -->

      <!-- LADO DIREITO -->
      <div class="col-md-9 col-xs-12">
<section class="aumentar-fonte leve-regular lar-720 margem-15-lat">

<article>          
            <div class="regular verde inline-block"><?php the_title(); ?></div>
            <div class="margin-10-base"></div>
            <div class="aumentar-fonte conteudo"><p style="text-align: justify; ">
              <?php the_content() ?>
            </div>
            <div class="margin-10-base"></div>
            <div class="fb-comments fb_iframe_widget" data-num-posts="5" data-width="720" data-href="<?php the_permalink() ?> " fb-xfbml-state="rendered"><span style="height: 180px; width: 720px;"><iframe id="f35a8fe381a1784" name="f144b2f2f238638" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=&amp;channel_url=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLJ9CfGDsgQ7.js%3Fversion%3D42%23cb%3Df262ed51bbea268%26domain%3Dnovosite.fbc-ba.com.br%26origin%3Dhttp%253A%252F%252Fnovosite.fbc-ba.com.br%252Ff2c56eb2e3dedc4%26relation%3Dparent.parent&amp;href=http%3A%2F%2Fnovosite.fbc-ba.com.br%2Fensino%2Fartigos-medicos%2F2013%2Fartigo-de-teste-03&amp;locale=pt_BR&amp;numposts=5&amp;sdk=joey&amp;width=720" style="border: none; overflow: hidden; height: 180px; width: 720px;"></iframe></span></div>
</article>
          <div id="passador" class="passadores negrito">
    
 
    <div class="clear"></div>
</div>
        </section>        

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