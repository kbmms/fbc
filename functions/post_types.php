<?php
function create_post_type_fbc(){
	$labels = array(
		'name'               => _x( 'Sliders', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Slider', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Slider', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Adicionar slider', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Adicionar nova slide', 'your-plugin-textdomain' ),
		'new_item'           => __( 'Nova slider', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Editar slider', 'your-plugin-textdomain' ),
		'view_item'          => __( 'Ver slider', 'your-plugin-textdomain' ),
		'all_items'          => __( 'Todos sliders', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search slider', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent slider:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'Nenhum slider.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
	);
	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor',  'thumbnail', 'comments' )
	);
	register_post_type( 'slider', $args );

    register_taxonomy( 'slider_category', array( 'slider' ), array(
              'hierarchical' => true,
              'label' => __( 'Categoria do slider' ),
              'show_ui' => true,
              'show_in_tag_cloud' => true,
              'query_var' => true,
              'rewrite' => true,
    ));

                    
    // Início Tipo convenios
    $labels = array(
    'name' => __( 'Convênios' ),
    'singular_name' => __( 'Convênio' ),
    'add_new' => __( 'Adicionar novo Convênio' ),
    'add_new_item' => __( 'Adicionar nova Convênio' ),
    'edit' => __( 'Editar' ),
    'edit_item' => __( 'Editar Convênio' ),
    'new_item' => __( 'Novo Convênio' ),
    'view' => __( 'Visualizar Convênio' ),
    'view_item' => __( 'Visualizar Convênio' ),
    'search_items' => __( 'Procurar Convênio' ),
    'not_found' => __( 'Nenhum Convênio encontrado' ),
    'not_found_in_trash' => __( 'Nenhum Convênio encontrado na lixeira' )
    );
    $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => __( 'Adicione um novo Convênio.' ),
    'show_ui' => true,
    'exclude_from_search' => false,
    'archive' => true,
    'hierarchical' => true,
    'capability_type' => 'page',
    'rewrite' => array('slug'=>'convenios'),
    'menu_position' => 5,
    'can_export' => true,
    'query_var' => true,
    'supports' => array( 'title', 'editor', 'excerpt', 'page-attributes', 'thumbnail', 'revisions')
    );
    register_post_type( 'convenios', $args);
    // Fim Tipo convenios

    // Início Corpo Clínico
    $labels = array(
    'name' => __( 'Corpo Clínico' ),
    'singular_name' => __( 'medico' ),
    'add_new' => __( 'Adicionar novo' ),
    'add_new_item' => __( 'Adicionar novo médico' ),
    'edit' => __( 'Editar' ),
    'edit_item' => __( 'Editar médico' ),
    'new_item' => __( 'Novo médico' ),
    'view' => __( 'Visualizar médico' ),
    'view_item' => __( 'Visualizar médico' ),
    'search_items' => __( 'Procurar médico' ),
    'not_found' => __( 'Nenhum médico encontrado' ),
    'not_found_in_trash' => __( 'Nenhum dado encontrado na lixeira' )
    );
    $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => __( 'Adicione um novo médico.' ),
    'show_ui' => true,
    'exclude_from_search' => false,
    'archive' => true,
    'hierarchical' => true,
    'capability_type' => 'page',
    'rewrite' => array('slug'=>'medicos'),
    'menu_position' => 5,
    'can_export' => true,
    'query_var' => true,
    'supports' => array( 'title', 'editor', 'excerpt', 'page-attributes', 'thumbnail', 'revisions')
    );
    register_post_type( 'medicos', $args);
    // Fim Tipo Corpo Clínico


    // Início Estruturas
    $labels = array(
    'name' => __( 'Estruturas' ),
    'singular_name' => __( 'estrutura' ),
    'add_new' => __( 'Adicionar nova' ),
    'add_new_item' => __( 'Adicionar nova esturtura' ),
    'edit' => __( 'Editar' ),
    'edit_item' => __( 'Editar estrutura' ),
    'new_item' => __( 'Nova estrutura' ),
    'view' => __( 'Visualizar estrutura' ),
    'view_item' => __( 'Visualizar estrutura' ),
    'search_items' => __( 'Procurar estrutura' ),
    'not_found' => __( 'Nenhuma estrutura encontrada' ),
    'not_found_in_trash' => __( 'Nenhum dado encontrado na lixeira' )
    );
    $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => __( 'Adicione um nova estrutura.' ),
    'show_ui' => true,
    'exclude_from_search' => false,
    'archive' => true,
    'hierarchical' => true,
    'capability_type' => 'page',
    'rewrite' => array('slug'=>'estrutura'),
    'menu_position' => 5,
    'can_export' => true,
    'query_var' => true,
    'supports' => array( 'title', 'editor', 'excerpt', 'page-attributes', 'thumbnail', 'revisions')
    );
    register_post_type( 'estrutura', $args);
    // Fim Tipo Estruturas


    // // Início Tipo Ensino
    // $labels = array(
    // 'name' => __( 'Ensinos' ),
    // 'singular_name' => __( 'Ensino' ),
    // 'add_new' => __( 'Adicionar novo Ensino' ),
    // 'add_new_item' => __( 'Adicionar novo Ensino' ),
    // 'edit' => __( 'Editar' ),
    // 'edit_item' => __( 'Editar Ensino' ),
    // 'new_item' => __( 'Novo Ensino' ),
    // 'view' => __( 'Visualizar Ensino' ),
    // 'view_item' => __( 'Visualizar Ensino' ),
    // 'search_items' => __( 'Procurar Ensino' ),
    // 'not_found' => __( 'Nenhum Ensino encontrado' ),
    // 'not_found_in_trash' => __( 'Nenhum Ensino encontrado na lixeira' )
    // );
    // $args = array(
    // 'labels' => $labels,
    // 'public' => true,
    // 'description' => __( 'Adicione um novo Ensino.' ),
    // 'show_ui' => true,
    // 'exclude_from_search' => false,
    // 'archive' => true,
    // 'hierarchical' => true,
    // 'capability_type' => 'page',
    // 'rewrite' => array('slug'=>'assistencia-ao-paciente/ensino'),
    // 'menu_position' => 5,
    // 'can_export' => true,
    // 'query_var' => true,
    // 'supports' => array( 'title', 'editor', 'excerpt', 'page-attributes', 'thumbnail', 'revisions')
    // );
    // register_post_type( 'ensino', $args);
    // // Fim Tipo consultas


    // Início Tipo consultas
    // $labels = array(
    // 'name' => __( 'Consultas' ),
    // 'singular_name' => __( 'Consulta' ),
    // 'add_new' => __( 'Adicionar nova Consulta' ),
    // 'add_new_item' => __( 'Adicionar nova Consulta' ),
    // 'edit' => __( 'Editar' ),
    // 'edit_item' => __( 'Editar Consulta' ),
    // 'new_item' => __( 'Novo Consulta' ),
    // 'view' => __( 'Visualizar Consulta' ),
    // 'view_item' => __( 'Visualizar Consulta' ),
    // 'search_items' => __( 'Procurar Consulta' ),
    // 'not_found' => __( 'Nenhum Consulta encontrado' ),
    // 'not_found_in_trash' => __( 'Nenhum Consulta encontrado na lixeira' )
    // );
    // $args = array(
    // 'labels' => $labels,
    // 'public' => true,
    // 'description' => __( 'Adicione um nova Consulta.' ),
    // 'show_ui' => true,
    // 'exclude_from_search' => false,
    // 'archive' => true,
    // 'hierarchical' => true,
    // 'capability_type' => 'page',
    // 'rewrite' => array('slug'=>'assistencia-ao-paciente/consultas'),
    // 'menu_position' => 5,
    // 'can_export' => true,
    // 'query_var' => true,
    // 'supports' => array( 'title', 'editor', 'excerpt', 'page-attributes', 'thumbnail', 'revisions')
    // );
    // register_post_type( 'consultas', $args);
    // // Fim Tipo consultas

    // register_taxonomy('consultas-category','consultas', array('labels' => array(
    //             'name' => 'Categorias',
    //             'add_new_item' => 'Adicionar nova categoria de consulta',
    //             'new_item_name' => "Nova consulta"
    //         ),
    //         'show_ui' => true,
    //         'show_tagcloud' => false,
    //         'hierarchical' => true
    //     )
    // );


    // Exames e Procedimentos
      $labels = array(
        'name' => _x('Exames e Procedimentos', 'post type general name'),
        'singular_name' => _x('Exame e Procedimento', 'post type singular name'),
        'add_new' => _x('Adicionar Novo', 'Exame'),
        'add_new_item' => __('Adicionar Novo Exame'),
        'edit_item' => __('Editar Exame'),
        'new_item' => __('Novo Exame'),
        'all_items' => __('Todos os Exames'),
        'view_item' => __('Ver  Exames'),
        'search_items' => __('Procurar  Exames'),
        'not_found' =>  __('Nenhum exame encontrado'),
        'not_found_in_trash' => __('Nenhum exame encontrado'),
        'parent_item_colon' => '',
        'menu_name' => 'Exames'
      );
      $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite'            => array( 'slug' => 'exame-e-procedimento' ),
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
      );
      register_post_type('exame-e-procedimento',$args);
    // Fim Exames e Procedimentos





    // Área Médica
      $labels = array(
        'name' => _x('Área Médica', 'post type general name'),
        'singular_name' => _x('Área Médica', 'post type singular name'),
        'add_new' => _x('Adicionar Novo', 'Arquivo'),
        'add_new_item' => __('Adicionar Novo Arquivo'),
        'edit_item' => __('Editar Arquivo'),
        'new_item' => __('Novo Arquivo'),
        'all_items' => __('Todos os Arquivos'),
        'view_item' => __('Ver  Arquivo'),
        'search_items' => __('Procurar  Arquivo'),
        'not_found' =>  __('Nenhum Arquivo encontrado'),
        'not_found_in_trash' => __('Nenhum Arquivo encontrado'),
        'parent_item_colon' => '',
        'menu_name' => 'Área Médica'
      );
      $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite'            => array( 'slug' => 'area-medica' ),
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
      );
      register_post_type('area-medica',$args);
          register_taxonomy( 'arquivo_category', array( 'area-medica' ), array(
              'hierarchical' => true,
              'label' => __( 'Categoria do arquivo' ),
              'show_ui' => true,
              'show_in_tag_cloud' => true,
              'query_var' => true,
              'rewrite' => true,
    ));
    // Fim Área Médica
};

?>
