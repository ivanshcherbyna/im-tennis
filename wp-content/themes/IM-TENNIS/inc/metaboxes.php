<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.


// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = THEME_OPT;

if ( !function_exists( "redux_add_metaboxes" ) ):
	function redux_add_metaboxes($metaboxes) {

        $home_page_options = array();

         $homeField1 = array(
            'title' => 'Баннер',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'banner-content-header',
                    'type'   => 'text',
                    'title'  => __( 'Баннер заголовок',THEME_OPT)
                ),
                array(
                    'id'     => 'banner-content-text',
                    'type'   => 'text',
                    'title'  => __( 'Баннер  текст',THEME_OPT),
                    'description'  => __( 'Подзаголовком текст',THEME_OPT)
                ),
                array(
                    'id'     => 'banner-btn-text',
                    'type'   => 'text',
                    'title'  => __( 'Кнопка на баннере',THEME_OPT)
                ),
                array(
                    'id'     => 'banner-btn-link',
                    'type'   => 'text',
                    'title'  => __( 'Ссылка на баннере',THEME_OPT)
                ),
                array(
                    'id'     => 'banner-img-background',
                    'type'     => 'media',
                    'title'    => __('Картинка на баннере',THEME_OPT)
                )
            )
        );
    $homeField2 = array(

    );
	
	$home_page_options[] = $homeField1;
	$home_page_options[] = $homeField2;

	$metaboxes[] = array(
		'id'            => 'home_page_options-options',
		'title'         => __( 'Настройки страницы', THEME_OPT ),
		'post_types'    => array( 'page' ),
		 'page_template' => array('front-page.php'),
		'position'      => 'normal', // normal, advanced, side
		'priority'      => 'high', // high, core, default, low
		'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'      => $home_page_options,
	);

	return $metaboxes;
  }
  add_action("redux/metaboxes/{$redux_opt_name}/boxes", 'redux_add_metaboxes');
endif;

