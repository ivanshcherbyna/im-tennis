<?php
/*
 * Template Name: Registration page
 * Template Post Type: page
 *
 */
?>
<?php get_header();?>

<div class="container">
<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
    <?php echo get_template_part('templates\breadcrumb',null) ?>
    <h2 class="header-section"><?php _e('Регистрация', THEME_OPT) ?></h2>
    <section class="log row">
        <div class='col-xl-9 col-lg-9 col-md-10 col-sm-12 col-12 mx-auto'>
            <form method="post" action="" class='log-form' <?php do_action( 'woocommerce_register_form_tag' ); ?>>

                <?php do_action( 'woocommerce_register_form_start' ); ?>

                <div class="form-group">
                    <label for="exampleFormControlInput1" class='form-label'><?php _e('Введите ваши данные', THEME_OPT) ?></label>
                    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
                        <input type="email" class="form-control mb-2" name="username" id="reg_username"
                               value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"
                               placeholder="<?php _e('Введите Ваше имя', THEME_OPT) ?>" />
                    <?php endif; ?>

                    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
                        <input type="password" required class="form-control" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?> " name="password" id="reg_password" placeholder="<?php _e('Ваш пароль', THEME_OPT) ?>'" />
                    <?php endif; ?>
                </div>


                <?php do_action( 'woocommerce_register_form' ); ?>

                <div class="d-flex justify-content-center align-items-center flex-wrap log-form-menu mt-3">

                    <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>

                    <div class="form-check mt-3 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">

                        <label class="form-check-label form-label" for="defaultCheck1">
                            <input class="" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Запомнить меня' ,THEME_OPT ); ?></span>
                        </label>
                    </div>

                    <div class=' col-xl-5 col-lg-5 l-md-7 col-sm-8 col-12 mt-3 p-0'>
                        <input type="submit" name="register" class="content-btn w-100 d-block" value="<?php _e('ЗАРЕГИСТРИРОВАТЬСЯ', THEME_OPT) ?>" />
                    </div>
                </div>

                <?php do_action( 'woocommerce_register_form_end' ); ?>
            </form>
        </div>


<!--        end-->

    </section>

<?php endif; ?>
</div>


<?php get_footer(); ?>