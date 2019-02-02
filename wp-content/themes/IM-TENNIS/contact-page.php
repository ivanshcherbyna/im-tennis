<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 */
get_header();
global $post;
$contacts = redux_post_meta(THEME_OPT, $post->ID, 'contacts-list');
$contactsSecond = redux_post_meta(THEME_OPT, $post->ID, 'contact-second-list')?>
<div class="container">
    <?php echo get_template_part('templates/breadcrumb', null); ?>

    <h2 class="header-section"><?php the_title(); ?></h2>
    <section class="contacts row justify-content-between">
        <div class="contacts-info contacts-item col-xl-6 col-lg-6 col-md-4 col-sm-12 col-12">
            <h2 class="header-section">Наши контакты</h2>
            <div class="contacts-info-list">

                <?php if ($contacts): foreach ($contacts as $contact): ?>

                <div class="contacts-info-list-item">
                    <h5 class="contacts-info-list-item-header"><?php echo $contact['name'] ?></h5>
                    <hr class='contacts-info-list-item-line'>
                    <div class='d-flex align-items-center'>
                        <span class="icon-phone mr-2"></span> <a href="tel:<?php echo $contact['tel'] ?>" class='contacts-info-list-item-text'><?php echo $contact['tel'] ?></a>
                    </div>
                    <div class='d-flex align-items-center'>
                        <span class="icon-mail mr-2"></span> <a href="mailto:<?php echo $contact['email'] ?>" class='contacts-info-list-item-text'><?php echo $contact['email'] ?></a>
                    </div>
                </div>

                <?php endforeach; endif; ?>
                <?php if ($contactsSecond): foreach ($contactsSecond as $contact): ?>

                <div class="contacts-info-list-item">
                    <h5 class="contacts-info-list-item-header"><?php echo $contact['name'] ?>
                        <span class="contacts-info-list-item-header-text"><?php echo $contact['position'] ?></span> </h5>
                    <hr class='contacts-info-list-item-line'>
                    <div class='d-flex align-items-center'>
                        <span class="icon-phone mr-2"></span> <a href="tel:<?php echo $contact['tel'] ?>" class='contacts-info-list-item-text'><?php echo $contact['tel'] ?></a>
                    </div>
                    <div class='d-flex align-items-center '>
                        <span class="icon-instragram mr-2"></span> <a href="https://www.instagram.com/<?php echo $contact['account'] ?>" class='contacts-info-list-item-text'>@<?php echo $contact['account'] ?></a>
                    </div>
                </div>
                <?php endforeach; endif; ?>

            </div>
        </div>
        <div class="contacts-letter contacts-item col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">
                <div class='w-100'>
                    <h2 class="header-section">Напишите нам</h2>
                <?php echo do_shortcode('[contact-form-7 id="66" title="Контактная форма 1"]'); ?>
                </div>
        </div>
    </section>
</div>
<!-- /section -->

<?php get_footer(); ?>
