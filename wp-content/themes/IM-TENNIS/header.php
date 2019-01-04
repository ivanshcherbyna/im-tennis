<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
    <?php
    global $mytheme, $post;
    ?>
	<!-- wrapper -->
	<div class="wrapper">

        <header>
            <div class="container">
                <div class="d-flex align-items-center flex-wrap">
                    <div class='header-logo col-xl-3 col-lg-12 col-md-12 col-sm-12 p-0'>
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo $mytheme['logo-header-img']['url'] ?>" alt="logo"></a>
                    </div>
                    <ul class="header-contact-list d-flex align-items-center justify-content-start mb-0 col-xl-6 col-lg-9 col-md-8 col-sm-12 p-0 ">
                        <li class='header-text d-flex align-items-center mr-3'><span class="icon-phone mr-2"></span> <a href="<?php echo $mytheme['header-tel-1'] ?>" class='header-text-link'><?php echo $mytheme['header-tel-1'] ?></a>,
                            <a href='<?php echo $mytheme['header-tel-2'] ?>' class='header-text-link'><?php echo $mytheme['header-tel-2'] ?></a></li>
                        <li class='header-text d-flex align-items-center'><span class="icon-mail mr-2"></span> <a href="mailto:<?php echo $mytheme['header-email'] ?>"
                                                                                                                  class='header-text-link d-flex align-items-center'><?php echo $mytheme['header-email'] ?></a></li>
                    </ul>
                    <ul class="header-register-list d-flex align-items-center justify-content-end  mb-0 col-xl-3 col-lg-3 col-md-4 col-sm-12 p-0 ">
                        <li class='header-text mr-3'><a href='<?php echo home_url()?>/my-account/registration-page/' class='header-text-link d-flex align-items-center'><span class="icon-register mr-2"></span>Регистрация</a></li>
                        <li class='header-text'><a href='/my-account' class='header-text-link d-flex align-items-center'><span class="icon-login mr-2"></span><?php do_action('my_show_user'); ?></a></li>

                    </ul>
                </div>
            </div>
            <div class="container d-flex justify-content-between flex-wrap mt-2">
                <?php header_nav(); ?>
                <?php get_search_form() ?>
                <a href="<?php echo wc_get_cart_url(); ?>" class='btn-cart d-flex align-items-center justify-content-center'><span class="icon-cart mr-2"></span>Корзина
                    пуста</a>
            </div>
            <div class='subheader'>
                <?php subheader_nav(); ?>
            </div>

        </header>
