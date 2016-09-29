<?php get_header(); ?> 


    <div class="margem-45-base"></div>



        <?php if (is_page ('Exames')) { ?>
        <?php get_template_part( 'templates-parts/exames/exames'); }
        else if (is_page ('a-fbc/historico')) {
          get_template_part( 'templates-parts/historico/historico');
        }
        else if (is_page ('Corpo Clínico')) {
          get_template_part( 'templates-parts/corpo-clinico/medicos');
        }
        else if (is_page ('Convênios')) {
          get_template_part( 'templates-parts/convenios/convenios');
        }        
        else if (is_page ('Estrutura')) {
          get_template_part( 'templates-parts/estruturas/estrutura');
        }
        else if (is_page ('Exame e Procedimento')) {
          get_template_part( 'templates-parts/exames-e-procedimentos/examesprocedimentos');
        }
        else if (is_page ('artigos-medicos')) {
          get_template_part( 'templates-parts/blog/blog');
        }                
        else { ?>         
       <?php get_template_part( 'templates-parts/page-padrao/base');
         } ?>


    </section>
    <!-- FIM EXAMES, INFERNAÇÃO, CONVÊNIOS E PARCEIROS -->



    
    <!-- PONTILHADO -->
   
    <!-- FIM PONTILHADO -->

    <!-- FIM SECTIONS -->
<?php get_footer(); ?> 