<?php
function comics_posts_type(){
  $labels_comics_post_type_array = array(
            'name'                  =>  __('Comics', 'topten'),
            'singular_name'         =>  __('Comics', 'topten'),
            'add_new'               =>  __('Ajouter un comic', 'topten'),
            'add_new_item'          =>  __('Ajouter un comic', 'topten'),
            'edit_item'             =>  __('Editer le comic', 'topten'),
            'new_item'              =>  __('Nouveau comics', 'topten'),
            'view_item'             =>  __('Visualiser le comic', 'topten'),
            'search_items'          =>  __('Rechercher un comic', 'topten'),
            'not_found'             =>  __('Aucun comic', 'topten'),
            'not_found_in_trash'    =>  __('Aucun comic dans la corbeille', 'topten'),
            'parent_item_colon'     =>  __('--', 'topten'),
            'menu_name'             =>  __('Comics', 'topten')
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
            'description'           =>  __('Contenu complet Projets', 'topten'),
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
