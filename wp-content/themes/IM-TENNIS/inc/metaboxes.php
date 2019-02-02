<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.


// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = THEME_OPT;

if ( !function_exists( "redux_add_metaboxes" ) ):
	function redux_add_metaboxes($metaboxes) {

        $homepage_options= array();

         $homeField = array(
            'title' => __( 'Баннер',THEME_OPT),
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

        $homepage_options[] = $homeField;

        $contact_page_option = array();

        $contact_field = array(
            'title' => __( 'Контакты',THEME_OPT),
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'               => 'contacts-list',
                    'type'             => 'repeatable_list',
                    'accordion'        => true,
                    'title'            => __('Список 1 стиля:', THEME_OPT),
                    'add_button'     => __( 'Добавить', THEME_OPT),
                    'remove_button'  => __( 'Удалить', THEME_OPT),
                    'fields'         => array(
                        array(
                            'id'       => 'name',
                            'type'     => 'text',
                            'title'    => __('Контактное лицо', THEME_OPT),
                        ),
                        array(
                            'id'       => 'tel',
                            'type'     => 'text',
                            'title'    => __('телефон', THEME_OPT),
                        ),
                        array(
                            'id'       => 'email',
                            'type'     => 'text',
                            'validate'     => 'email',
                            'title'    => __('email', THEME_OPT),
                        )
                    )
                ),
                array(
                    'id'               => 'contact-second-list',
                    'type'             => 'repeatable_list',
                    'accordion'        => true,
                    'title'            => __('Список 2 стиля:', THEME_OPT),
                    'add_button'     => __( 'Добавить', THEME_OPT),
                    'remove_button'  => __( 'Удалить', THEME_OPT),
                    'fields'         => array(
                        array(
                            'id'       => 'name',
                            'type'     => 'editor',
                            'title'    => __('Контактное лицо', THEME_OPT),
                        ),
                        array(
                            'id'       => 'position',
                            'type'     => 'text',
                            'title'    => __('Контактное лицо', THEME_OPT),
                        ),
                        array(
                            'id'       => 'tel',
                            'type'     => 'text',
                            'title'    => __('телефон', THEME_OPT),
                        ),
                        array(
                            'id'       => 'account',
                            'type'     => 'text',
                            'title'    => __('Instagramm аккаунт (...без знака @)', THEME_OPT),
                        )
                    )
                )
            )
        );



        $contact_page_option[] = $contact_field;


	$metaboxes[] = array(
		'id'            => 'home-page-options',
		'title'         => __( 'Настройки страницы', THEME_OPT ),
		'post_types'    => array( 'page' ),
		'page_template' => array('front-page.php'),
		'position'      => 'normal', // normal, advanced, side
		'priority'      => 'high', // high, core, default, low
		'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'      => $homepage_options,
	);
	$metaboxes[] = array(
		'id'            => 'contact-page-options',
		'title'         => __( 'Раздел контакты', THEME_OPT ),
		'post_types'    => array( 'page' ),
		'page_template' => array('contact-page.php'),
		'position'      => 'normal', // normal, advanced, side
		'priority'      => 'high', // high, core, default, low
		'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'      => $contact_page_option,
	);


	return $metaboxes;
  }
  add_action("redux/metaboxes/{$redux_opt_name}/boxes", 'redux_add_metaboxes');
endif;

