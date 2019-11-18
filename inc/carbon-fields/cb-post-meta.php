<?php

	if (!defined('ABSPATH')) exit;

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'crb_news_post_options');
	function crb_news_post_options()
	{
		Container::make('post_meta', __('Select time'))
		         ->where('post_term', '=', array(
			         'field' => 'slug',
			         'value' => 'serviciile-noastre',
			         'taxonomy' => 'category',
		         ))
		         ->add_fields(array(
			         Field::make('text', 'crb_services_item_short_text_ro', __('crb_services_item_short_text_ro'))
			              ->set_width(30),
			         Field::make('text', 'crb_services_item_short_text_ru', __('crb_services_item_short_text_ru'))
			              ->set_width(30),
			         Field::make('text', 'crb_services_item_short_text_en', __('crb_services_item_short_text_en'))
			              ->set_width(30),

			         Field::make( 'text', 'crb_services_link_ro', __( 'crb_services_link_ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_services_link_ru', __( 'crb_services_link_ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_services_link_en', __( 'crb_services_link_en' ) )
			              ->set_width( 30 ),
		         ));
	}

