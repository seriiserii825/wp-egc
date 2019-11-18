<?php
	$currentlang = get_bloginfo( 'language' );
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<?php wp_head(); ?>
    <meta name="author" content="https://vk.com/id303535913">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3af180e171.js"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/media.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
	<?php wp_head(); ?>

	<?php if(get_lang() == '_ru'): ?>
        <script src="//code.jivosite.com/widget.js" data-jv-id="jgW4W8p7cB" async></script>
	<?php elseif(get_lang() == '_en'): ?>
        <script src="//code.jivosite.com/widget.js" data-jv-id="jLIPK3pKU9" async></script>
	<?php else:  ?>
        <script src="//code.jivosite.com/widget.js" data-jv-id="BAuSBURt3l" async></script>
	<?php endif; ?>

</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-default" id="js-header">
    <div class="header-container">
        <ul class="nav navbar-nav navbar-right">
            <div class="wpglobus-lang">
				<?php if ( ! dynamic_sidebar( 'wpglobus' ) ): ?>
                    <h2>wpglobus widget</h2>
				<?php endif; ?>
            </div>
        </ul>
        <div class="header-line container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <div class="sandwitch-wrap">
                    <div class="sandwitch">
                        <div class="sandwitch__line sandwitch__line--top"></div>
                        <div class="sandwitch__line sandwitch__line--middle"></div>
                        <div class="sandwitch__line sandwitch__line--bottom"></div>
                    </div>
                </div>

                <div class="navbar-brand">
                    <?php the_custom_logo(); ?>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="header-bottom" id="bs-example-navbar-collapse-1">
				<?php wp_nav_menu( [
					'theme_location'  => 'menu-top',
					'menu'            => '',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'nav navbar-nav navus',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				] ); ?>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</nav>