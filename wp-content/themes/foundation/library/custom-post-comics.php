<?php/*
function portfolio_posts_type(){
  $labels_portfolio_post_type_array = array(
            'name'                  =>  __('Portfolio', 'alexandrek'),
            'singular_name'         =>  __('Portfolios', 'alexandrek'),
            'add_new'               =>  __('Ajouter une créa', 'alexandrek'),
            'add_new_item'          =>  __('Ajouter une créa', 'alexandrek'),
            'edit_item'             =>  __('Editer la créa', 'alexandrek'),
            'new_item'              =>  __('Nouvelle créa', 'alexandrek'),
            'view_item'             =>  __('Visualiser la créa', 'alexandrek'),
            'search_items'          =>  __('Rechercher une créa', 'alexandrek'),
            'not_found'             =>  __('Aucun portfolio', 'alexandrek'),
            'not_found_in_trash'    =>  __('Aucune créa dans la corbeille', 'alexandrek'),
            'parent_item_colon'             =>  __( '', 'alexandrek'),
            'menu_name'             =>  __('Portfolio', 'alexandrek')
        );
        $supports_portfolio_post_type_array = array(
            'title',
            'editor',
            'thumbnail',
            'excerpt'
        );
        $rewrite_portfolio_post_type_array = array(
            'slug'          =>  _x('portfolio', 'Pour les crea', 'foundationpress'),
            'with_front'    =>  false,
            'feeds'         =>  true,
            'pages'         =>  true
        );
        $args_portfolio_post_type_array = array(
            'labels'                =>  $labels_portfolio_post_type_array,
            'description'           =>  __('Contenu complet Projets', 'alexandrek'),
            'public'                =>  true,
            'publicly_queryable'    =>  true,
            'menu_position'         =>  50,
            'menu_icon'             =>  '',
            'capability_type'       =>  'post',
            'supports'              =>  $supports_portfolio_post_type_array,
            'rewrite'               =>  $rewrite_portfolio_post_type_array,
            'show_in_nav_menus'     =>  true,
            'hierarchical'          =>  true,
            'has_archive'           =>  true
        );
        $labels_serie = array(
        		'name'              => _x('Type de créa', 'taxonomy general name'),
        		'singular_name'     => _x('Type de créa', 'taxonomy singular name'),
        		'search_items'      => __('Rechercher une série'),
        		'all_items'         => __('Toutes les séries'),
        		'edit_item'         => __('Éditer une série'),
        		'update_item'       => __('Mettre à jour une série'),
        		'add_new_item'      => __('Ajouter une série'),
        		'new_item_name'     => __('Nouvelle série'),
        		'menu_name'         => __('Type de créa'),
    	);
    	// register taxonomy
    	register_taxonomy( 'portfolio', 'portfolio', array(
        		'hierarchical' => false,
        		'labels' => $labels_serie,
        		'query_var' => true,
        		'show_admin_column' => true,
            'rewrite' => 'slug'
    	) );
        register_post_type('portfolio', $args_portfolio_post_type_array);
      }
      add_action('init','portfolio_posts_type', 1);*/
    ?>
    <?php
    function comics_posts_type(){
      $labels_comics_post_type_array = array(
                'name'                  =>  __('Comics', 'munterlinden'),
                'singular_name'         =>  __('Comic', 'munterlinden'),
                'add_new'               =>  __('Ajouter un comic', 'munterlinden'),
                'add_new_item'          =>  __('Ajouter un comic', 'munterlinden'),
                'edit_item'             =>  __('Editer le comic', 'munterlinden'),
                'new_item'              =>  __('Nouveau comics', 'munterlinden'),
                'view_item'             =>  __('Visualiser le comic', 'munterlinden'),
                'search_items'          =>  __('Rechercher un comic', 'munterlinden'),
                'not_found'             =>  __('Aucun comics', 'munterlinden'),
                'not_found_in_trash'    =>  __('Aucun comic dans la corbeille', 'munterlinden'),
                'parent_item_colon'     =>  __('--', 'munterlinden'),
                'menu_name'             =>  __('Comics', 'munterlinden')
            );
            $supports_comics_post_type_array = array(
                'title',
                'editor',
                'thumbnail',
                'excerpt'
            );
            $rewrite_comics_post_type_array = array(
                'slug'          =>  _x('comics', 'Pour les collections', 'foundationpress'),
                'with_front'    =>  false,
                'feeds'         =>  true,
                'pages'         =>  true
            );
            $args_comics_post_type_array = array(
                'labels'                =>  $labels_comics_post_type_array,
                'description'           =>  __('Contenu complet Projets', 'munterlinden'),
                'public'                =>  true,
                'publicly_queryable'    =>  true,
                'menu_position'         =>  50,
                'menu_icon'             =>  '',
                'capability_type'       =>  'post',
                'supports'              =>  $supports_comics_post_type_array,
                'rewrite'               =>  $rewrite_comics_post_type_array,
                'show_in_nav_menus'     =>  true,
                'hierarchical'          =>  true,
                'has_archive'           =>  true
            );
            register_post_type('comics', $args_comics_post_type_array);
          }
          add_action('init','comics_posts_type', 1);
     ?>
