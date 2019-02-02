<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<div class="u-columns col2-set" id="customer_login">
    <section class="log row">
        <div class="col-xl-9 col-lg-9 col-md-10 col-sm-12 col-12 mx-auto">

            <form class="log-form" method="post">

                <?php do_action( 'woocommerce_login_form_start' ); ?>
                <div class="form-group">
                    <label for="username" class="form-label"><?php esc_html_e( 'Введите ваши данные', THEME_OPT ); ?>&nbsp;</label>
                    <input type="text" class="form-control mb-2" name="username" id="username" autocomplete="username" placeholder="Введите ваш email" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                    <input class="form-control mb-2" type="password" name="password" id="password" autocomplete="current-password" placeholder="Ваш пароль"/>
                </div>
                <?php do_action( 'woocommerce_login_form' ); ?>

                <div class="d-flex justify-content-center align-items-center flex-wrap log-form-menu mt-3">
                    <div class="form-check mt-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                        <label class="form-check-label">
                            <input class="" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
                        </label>
                    </div>
                    <div class='col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mt-3 p-0 log-form-menu-link'>
                        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="content-link"><?php esc_html_e( 'Забыл пароль?', THEME_OPT ); ?></a>
                    </div>
                       <div class=" col-xl-4 col-lg-4 col-md-7 col-sm-8 col-12 mt-3 p-0">
                           <input type="submit" class="content-btn w-100 d-block" name="login" value="<?php esc_attr_e( 'ВХОД', THEME_OPT ); ?>">
                       </div>
                    <?php do_action( 'woocommerce_login_form_end' ); ?>
            </form>

        </div>


    <?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
        <p class= 'mx-auto form-label text-center pl-3 pr-3'><?php _e('Если Вы еще не зарегистрированы, перейдите на', THEME_OPT) ?> <a href='<?php get_home_url(); ?>/registration-page/' class='content-link d-inline'> <?php _e('страницу регистрации', THEME_OPT) ?>.</a></p>
    <?php endif; ?>
    </section>
</div>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
