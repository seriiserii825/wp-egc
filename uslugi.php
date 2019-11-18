<?php
	/* Template Name: Наши услуги */
	get_header();
?>

<script>
	//$(document).ready(function () {
	//	$('.navus li a').each(function () {
	//		var largePath = $(this).attr("href");
	//		$(this).attr("href", '<?php //echo home_url(); ?>//' + largePath);
	//	});
	//});
</script>

<div class="stat_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>
<?php
	$count    = 0;
	$temp     = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query();
	$wp_query->query( 'showposts=16' . '&paged=' . $paged );
	$i = 1;
	while ( $wp_query->have_posts() ) : ?>
        <?php $wp_query->the_post(); ?><?php $count ++ ?>
    
        <div id="js-service-item-<?php echo $i; ?>" class="loop-bg-<?php echo $count ?>">
            <div class="item-loop item-loop-<?php echo $count ?>">
                <div class="left">
					<?php the_post_thumbnail( 'full' ); ?>
                </div>
                <div class="right">
                    <h3><span style="font-weight:bold;"><?php echo $count ?>.</span> <?php the_title(); ?></h3>
	                <?php the_content(); ?>
                </div>
            </div>
        </div>
        <div style="clear:both"></div>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); ?>

<div class="container services-back-link">
    <div class="row">
        <div class="col-md-4 col-md-offset-1 col-sm-5 col-xs-12">
            <!--            <a href="--><?php //echo home_url(); ?><!--" class="back">< --><?php //pll_e( 'Назад' ); ?><!--</a>-->
        </div>
    </div>
</div>

<?php
	$currentlang = get_bloginfo( 'language' );
	if ( $currentlang == "ru-RU" ):
		?>
        <style>
            .item-loop h3 {
                font-family: helvetica-w01-light, helvetica-w02-light, sans-serif !important;
                font-size: 17px !important;
                font-weight: 400;
            }
        </style>
	<?php endif; ?>
<?php
	get_footer();
?>
