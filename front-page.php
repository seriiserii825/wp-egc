<?php
	/* Template Name: Principal */
	get_header();

?>
    <div class="video-bg">
        <div class="bgcolor"></div>
        <div class="bgimg"></div>
        <video autoplay muted loop id="myVideo">
            <source src="<?php echo carbon_get_theme_option( 'crb_slider_video_src' ); ?>" type="video/mp4">
        </video>

        <div class="info">
            <h1><?php echo carbon_get_theme_option( 'crb_slider_title' . get_lang() ); ?></h1>
            <p>
                <span style="    letter-spacing: -4px; margin-right:10px;">---</span> <?php echo carbon_get_theme_option( 'crb_slider_subtitle_title_2' . get_lang() ); ?>
                <span style="letter-spacing: -4px;  margin-left:10px;">---</span>
            </p>
            <a class="go-to-services" href="#uslugi" class="hidden-xs">
                <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.webp" alt="">
            </a>
        </div>

        <div class="bottom-info">
            <div class="container">
                <div class="address-bar">
                    <p class="location">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ic1.png" alt="">
                        <span><?php echo carbon_get_theme_option( 'crb_address_city' . get_lang() ); ?></span>
                    </p>
                    <p class="mail">
                        <a href="mailto:<?php the_field( 'mail' ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ic2.png" alt="">
                            <span><?php echo carbon_get_theme_option( 'crb_email' ); ?></span>
                        </a>
                    </p>
                    <p class="phone">
						<?php $phone = get_field( 'phone_2', 'options' ); ?>

                        <a href="tel:<?php echo clear_phone( $phone ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ic3.png" alt="">
                            <span>
                                <?php echo $phone; ?>
                            </span>
                        </a>
                    </p>

                    <a href="<?php the_field( 'facebookurl', 'options' ); ?>" target="_blank" class="facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <section id="uslugi" class="services-block">
        <h2 class="section-title"><?php echo carbon_get_theme_option( 'crb_services_title' . get_lang() ); ?></h2>
        <div class="container">
            <div class="row">
                <div class="services-grid">
					<?php
						$wp_query = new WP_Query();
						$wp_query->query( 'showposts=16' );
						while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                            <div class="item">
                                <a class="services__link" href="<?php echo carbon_get_the_post_meta('crb_services_link'.get_lang()); ?>">
                                    <div class="img">
										<?php the_post_thumbnail( 'full' ); ?>
                                    </div>
                                </a>
                                <div class="content">
                                    <a href="<?php echo carbon_get_the_post_meta('crb_services_link'.get_lang()); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                    <div class="exc"><?php echo carbon_get_the_post_meta( 'crb_services_item_short_text' . get_lang() ); ?></div>
                                    <a href="<?php echo carbon_get_the_post_meta('crb_services_link'.get_lang()); ?>">
                                        <span><?php echo carbon_get_theme_option( 'crb_services_item_link' . get_lang() ); ?> ></span>
                                    </a>
                                </div>
                            </div>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
					<?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="left">
            <div class="content">
                <h2 class="section-title"><?php echo carbon_get_theme_option( 'crb_about_title' . get_lang() ); ?></h2>
                <div class="about__text"><?php echo wpautop( carbon_get_theme_option( 'crb_about_text' . get_lang() ) ); ?></div>
            </div>
        </div>
    </section>

    <section id="numbers">
        <div class="container">
            <div class="row">
				<?php $numbers = carbon_get_theme_option( 'crb_slider' ); ?>
				<?php foreach ( $numbers as $number ): ?>
                    <div class="col-xs-4 col-md-4 col-sm-4 nums">
                        <div class="item">
                            <p><?php echo $number['crb_numbers_title']; ?></p>
                            <span><?php echo $number[ 'crb_numbers_text' . get_lang() ]; ?></span>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="filial">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="item">
                        <h2 class="section-title"><?php echo carbon_get_theme_option( 'crb_filials_title' . get_lang() ); ?></h2>
                        <p><?php echo carbon_get_theme_option( 'crb_filials_text' . get_lang() ); ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
					<?php $filials = carbon_get_theme_option( 'crb_filials_cities' ); ?>
                    <div class="carta">
                        <img class="map-with-line" src="<?php echo get_template_directory_uri(); ?>/img/karta.png" alt="">
                        <img class="map-clear" src="<?php echo get_template_directory_uri(); ?>/img/map-clear_trim.png" alt="">

						<?php foreach ( $filials as $filial ): ?>
                            <div class="city <?php echo $filial['crb_filials_city_class']; ?>">
                                <p>
                                    <a href="tel:<?php echo $filial['crb_filials_phone_long']; ?>"><?php echo $filial[ 'crb_filials_city_title' . get_lang() ]; ?></a>
                                </p>
                                <a href="tel:<?php echo $filial['crb_filials_phone_long']; ?>">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number"><?php echo $filial['crb_filials_phone_short']; ?></span>
                                </a>
                            </div>
						<?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partners">
        <h2 class="section-title"><?php echo carbon_get_theme_option( 'crb_partners_title' . get_lang() ); ?></h2>
        <div class="container">
            <div class="row">
                <div class="partners-carousel owl-carousel owl-theme carousel-center-active-item carousel-center-active-item-style-2 mb-0">

					<?php
						$images = carbon_get_theme_option( 'crb_partners_slider' );
						if ( $images ): ?><?php foreach ( $images as $image ): ?>
                            <img src="<?php echo $image['crb_image']; ?>" alt=""/>
						<?php endforeach; ?><?php endif; ?>

                </div>
            </div>
        </div>
    </section>

<?php
	get_footer();