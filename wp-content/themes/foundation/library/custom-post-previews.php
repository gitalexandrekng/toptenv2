    <?php
    function preview_posts_type(){
      $labels_preview_post_type_array = array(
                'name'                  =>  __('Preview', 'munterlinden'),
                'singular_name'         =>  __('Preview', 'munterlinden'),
                'add_new'               =>  __('Ajouter un preview', 'munterlinden'),
                'add_new_item'          =>  __('Ajouter un preview', 'munterlinden'),
                'edit_item'             =>  __('Editer le preview', 'munterlinden'),
                'new_item'              =>  __('Nouveau preview', 'munterlinden'),
                'view_item'             =>  __('Visualiser le preview', 'munterlinden'),
                'search_items'          =>  __('Rechercher un preview', 'munterlinden'),
                'not_found'             =>  __('Aucun preview', 'munterlinden'),
                'not_found_in_trash'    =>  __('Aucun preview dans la corbeille', 'munterlinden'),
                'parent_item_colon'     =>  __('--', 'munterlinden'),
                'menu_name'             =>  __('Preview', 'munterlinden')
            );
            $supports_preview_post_type_array = array(
                'title',
                'editor',
                'thumbnail',
                'excerpt'
            );
            $rewrite_preview_post_type_array = array(
                'slug'          =>  _x('preview', 'Pour les collections', 'foundationpress'),
                'with_front'    =>  false,
                'feeds'         =>  true,
                'pages'         =>  true
            );
            $args_preview_post_type_array = array(
                'labels'                =>  $labels_preview_post_type_array,
                'description'           =>  __('Contenu complet Projets', 'munterlinden'),
                'public'                =>  true,
                'publicly_queryable'    =>  true,
                'menu_position'         =>  50,
                'menu_icon'             =>  '',
                'capability_type'       =>  'post',
                'supports'              =>  $supports_preview_post_type_array,
                'rewrite'               =>  $rewrite_preview_post_type_array,
                'show_in_nav_menus'     =>  true,
                'hierarchical'          =>  true,
                'has_archive'           =>  true
            );
            register_post_type('preview', $args_preview_post_type_array);
          }
          add_action('init','preview_posts_type', 1);
     ?>
