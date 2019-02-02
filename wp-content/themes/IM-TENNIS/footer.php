<?php
global $mytheme;
?>
<!-- footer -->
			<footer>
				<div class="container d-flex flex-wrap">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-9 p-0 footer-column">

                    <?php if (is_array($mytheme['menu-repeater-items'])): ?>

                        <h4 class='footer-column-header'><?php _e('Разделы сайта',THEME_OPT) ?></h4>
                        <ul class='footer-column-list'>
                            <?php foreach ($mytheme['menu-repeater-items'] as $item): ?>

                                <li><a href="<?php echo $item['menu-link'] ?>" class='footer-column-list-item'><?php echo $item['menu-title'] ?></a></li>

                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-9 p-0 footer-column">

                        <?php if (is_array($mytheme['info-repeater-items'])): ?>

                        <h4 class='footer-column-header'><?php _e('Информация',THEME_OPT) ?></h4>
                        <ul class='footer-column-list'>
                            <?php foreach ($mytheme['info-repeater-items'] as $item): ?>

                                <li><a href="<?php echo $item['info-link'] ?>" class='footer-column-list-item'><?php echo $item['info-title'] ?></a></li>

                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-9 p-0 footer-column">
                        <h4 class='footer-column-header'><?php _e('Контакты', THEME_OPT) ?></h4>
                        <ul class='footer-column-contact'>
                            <li class="footer-column-contact-item d-flex mb-2"><span class="icon-phone mr-3 pt-2"></span>
                                <div>
                                    <div><?php echo $mytheme['header-tel-1'] ?>,</div>
                                    <div><?php echo $mytheme['header-tel-2'] ?></div>
                                </div>
                            </li>
                            <li class="footer-column-contact-item d-flex align-items-center"><span class="icon-mail mr-3"></span><a href="mailto:<?php echo $mytheme['header-email'] ?>"
                                                                                                                                    class='footer-column-contact-item'><?php echo $mytheme['header-email'] ?></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-9 p-0 footer-column">

                        <?php if (is_array($mytheme['social-repeater-items'])): ?>

                        <h4 class='footer-column-header'><?php _e('Мы в соцсетях', THEME_OPT) ?></h4>
                        <div class="d-flex footer-column-social-list">
                            <?php foreach ($mytheme['social-repeater-items'] as $item): ?>

                                <a href='<?php echo $item['social-link'] ?>' title="<?php echo $item['social-select'] ?>"><span class="icon-<?php echo $item['social-select'] ?> footer-column-social-item mr-3"></span></a>

                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="footer-bottom d-flex align-items-center">
                    <div class="container d-flex align-items-center justify-content-around flex-wrap footer-bottom-list">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-8 "><img src="<?php echo $mytheme['logo-footer-img']['url'] ?>" alt="#"></div>

                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12 col-12 footer-bottom-text d-flex">
                        <div>2018 © PROtennis, </div>
                        <div> Все права защищены</div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-3 col-sm-6 col-4 pl-4"><a href='https://urich.org/'><img src="<?php echo get_template_directory_uri(); ?>/inc/urich/img/logo-full-2.png" alt="#"></a></div>
                </div>
			</footer>
			<!-- /footer footer-bg -->
		<?php wp_footer(); ?>
	</body>
</html>
