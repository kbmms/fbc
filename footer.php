<!-- =======================    FOOTER    ======================== -->



<script>
  $('#userNav').change(function() {
     window.location = $(':selected',this).attr('name')
  });
 </script>

</div>
    </div>
    <!-- GOOGLE MAP -->
    <section class="gmap regular">
      <div class="">
        <div class="seta-verde seta-bread margem-15-lat inline-block text-center">
          <a href="/como-chegar" class="hover">Como Chegar</a>  
        </div> 
        <div class="margin-10-base"></div>       
      </div>
      <div class="mapa" id="mapa"></div> 
    </section>  
    <!-- FIM GOOGLE MAP -->
    <!-- FOOTER -->
    <footer>
     <div class="pontilhados-footer hidden-sm hidden-xs"></div>
 <?php    

            wp_nav_menu(
                $args = array( 
                    'menu' => 'top', 
                    'container' => 'nav', 
                    'container_class' => 'menu menu-principal interna padding-53-0-17 leve-regular hidden-xs hidden-sm', 
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


    <!-- INFORMAÇÕES -->
    <div class="interna padding-70-base hidden-xs hidden-sm">
      <div class="info-rodape">
        <p>Rua das Hortências, 326, Itaigara. Salvador - BA. CEP: 41810-010</p>
        <div class="padding-20-0"><span>Horário de Atendimento &amp; Telefones</span></div>
<p>Pronto Atendimento - <span>71 2102-8588</span> - Emergência Cardiológica 24h</p>
<p>Marcação de Consultas e Exames - <span>71 2102-8555</span></p>
<p>Telefone Geral - <span>71 2102 8500</span></p>
      </div>
      <div class="logo-peq">
        <a href="/" class="hover">
          <img alt="FBC" src="http://novosite.fbc-ba.com.br/logo-rodape.jpg">
        </a>
      </div>
      <div class="clear"></div>
      <div class="logo-peq" style="padding-top:30px">
        <a href="http://www.abrasivodigital.com.br" class="hover" target="_blank" style="float:right">
          <img alt="Abrasivo Digital" title="Abrasivo Digital" src="<?php bloginfo('template_url'); ?>/images/assinatura_abrasivo.png">
        </a>
      </div>
    </div>
    <!-- FIM INFORMAÇÕES -->


<!-- Footer responsivo small -->
    <div class="visible-xs visible-sm container-fluid">
      <div class="text-center container">
        <p>Rua das Hortências, 326, Itaigara. Salvador - BA. CEP: 41810-010</p>
        <div class="padding-20-0"><span>Horário de Atendimento &amp; Telefones</span></div>
<p>Pronto Atendimento - <span>71 2102-8588</span> - Emergência Cardiológica 24h</p>
<p>Marcação de Consultas e Exames - <span>71 2102-8555</span></p>
<p>Telefone Geral - <span>71 2102 8500</span></p>
      </div>
      <hr />
      <div class="container text-center">
        <a href="<?php bloginfo('url'); ?>" class="hover">
          <img alt="FBC" src="http://novosite.fbc-ba.com.br/logo-rodape.jpg">
        </a>
      </div>
      
      <div class="container text-center" style="padding-top:30px">
        <a href="http://www.abrasivodigital.com.br" class="hover" target="_blank" style="float:right">
          <img alt="Abrasivo Digital" title="Abrasivo Digital" src="<?php bloginfo('template_url'); ?>/images/assinatura_abrasivo.png">
        </a>
      </div>
    </div>


    </footer>
    <!-- FIM FOOTER -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.1.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-migrate-1.2.1.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.92051.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.mousewheel-3.0.6.pack.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.pack.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox-buttons.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox-thumbs.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox-media.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.timelinr-0.9.53.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.mobile.custom.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script> <!-- Timeline script Resource jQuery -->    

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2vxho4lUmYy1MeZjyQStNDAqCOyubRng&amp;sensor=true">
        </script>

        <script type="text/javascript">

         function initialize() {
          var mapOptions = {
            zoom: 18,
            scrollwheel: false,
            center: new google.maps.LatLng(-12.994020, -38.458275),
            mapTypeId: google.maps.MapTypeId.ROADMAP            
          }
          var map = new google.maps.Map(document.getElementById('mapa'),mapOptions);
          var image = "<?php bloginfo('template_url'); ?>/icone_mapa.png";
          var myLatLng = new google.maps.LatLng(-12.994020, -38.458275);
          var beachMarker = new google.maps.Marker({
           position: myLatLng,
           map: map,
           title: 'Fundação Bahiana de Cardiologia',
           icon: image           
          });
         }
         google.maps.event.addDomListener(window, 'load', initialize);          
        </script>

    <!-- Setar class Active ou atual -->
    <script>
    $(function () {
        var url = window.location.pathname,
            urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
        $('.menu1 a').each(function () {
          
            if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                $(this).addClass('atual');
                $(this).parent().previoussibling().find('a').removeClass('atual');
            }

        });    
    });
    $(function () {
        var url = window.location.pathname,
            urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
        $('#MenuLavaLamp a').each(function () {
          
            if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                $(this).addClass('atual');
                $(this).parent().previoussibling().find('a').removeClass('atual');
            }

        });    
    });
      </script>
      
      <?php wp_footer(); ?>
</body>

</html>