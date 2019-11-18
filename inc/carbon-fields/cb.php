<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
	function crb_attach_theme_options() {
		$basic_options_container = Container::make( 'theme_options', __( 'Carbon fields' ) )
		                                    ->add_tab( __( 'Text translate' ), array(
			                                    Field::make( 'text', 'crb_services_title_ro', __( 'services_title ro' ) )
			                                         ->set_width( 30 ),
			                                    Field::make( 'text', 'crb_services_title_ru', __( 'services_title ru' ) )
			                                         ->set_width( 30 ),
			                                    Field::make( 'text', 'crb_services_title_en', __( 'services_title en' ) )
			                                         ->set_width( 30 ),

			                                    Field::make( 'text', 'crb_email', __( 'email' ) ),

			                                    Field::make( 'text', 'crb_address_city_ro', __( 'address_city ro' ) )
			                                         ->set_width( 30 ),
			                                    Field::make( 'text', 'crb_address_city_ru', __( 'address_city ru' ) )
			                                         ->set_width( 30 ),
			                                    Field::make( 'text', 'crb_address_city_en', __( 'address_city en' ) )
			                                         ->set_width( 30 ),

			                                    Field::make( 'text', 'crb_address_just_city_ro', __( 'address_just_city ro' ) )
			                                         ->set_width( 30 ),
			                                    Field::make( 'text', 'crb_address_just_city_ru', __( 'address_just_city ru' ) )
			                                         ->set_width( 30 ),
			                                    Field::make( 'text', 'crb_address_just_city_en', __( 'address_just_city en' ) )
			                                         ->set_width( 30 ),

			                                    Field::make( 'text', 'crb_phone', __( 'phone' ) )
			                                         ->set_width( 30 ),
			                                    Field::make( 'text', 'crb_phone_with_space', __( 'phone_with_space' ) )
			                                         ->set_width( 30 ),
			                                    Field::make( 'text', 'crb_phone_with_space_2', __( 'phone_with_space_2' ) )
			                                         ->set_width( 30 ),
		                                    ) );

		// Add second options page under 'Basic Options'
		Container::make( 'theme_options', 'Blocks' )
		         ->set_page_parent( $basic_options_container )// reference to a top level container
		         ->add_tab( __( 'Slider' ), array(
				Field::make( 'text', 'crb_slider_title_ro', __( 'crb_slider_title_ro' ) )
				     ->set_width( 30 ),
				Field::make( 'text', 'crb_slider_title_ru', __( 'crb_slider_title_ru' ) )
				     ->set_width( 30 ),
				Field::make( 'text', 'crb_slider_title_en', __( 'crb_slider_title_en' ) )
				     ->set_width( 30 ),

				Field::make( 'text', 'crb_slider_subtitle_title_2_ro', __( 'crb_slider_subtitle_title_2_ro' ) )
				     ->set_width( 30 ),
				Field::make( 'text', 'crb_slider_subtitle_title_2_ru', __( 'crb_slider_subtitle_title_2_ru' ) )
				     ->set_width( 30 ),
				Field::make( 'text', 'crb_slider_subtitle_title_2_en', __( 'crb_slider_subtitle_title_2_en' ) )
				     ->set_width( 30 ),

				Field::make( 'file', 'crb_slider_video_src', __( 'crb_slider_video_src' ) )
				     ->set_value_type( 'url' )
			) )
		         ->add_tab( __( 'Services' ), array(
			         Field::make( 'text', 'crb_services_item_link_ro', __( 'crb_services_item_link_ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_services_item_link_ru', __( 'crb_services_item_link_ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_services_item_link_en', __( 'crb_services_item_link_en' ) )
			              ->set_width( 30 ),

		         ) )
		         ->add_tab( __( 'About' ), array(
			         Field::make( 'text', 'crb_about_title_ro', __( 'crb_about_title_ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_about_title_ru', __( 'crb_about_title_ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_about_title_en', __( 'crb_about_title_en' ) )
			              ->set_width( 30 ),

			         Field::make( 'rich_text', 'crb_about_text_ro', __( 'crb_about_text_ro' ) ),
			         Field::make( 'rich_text', 'crb_about_text_ru', __( 'crb_about_text_ru' ) ),
			         Field::make( 'rich_text', 'crb_about_text_en', __( 'crb_about_text_en' ) ),
		         ) )
		         ->add_tab( __( 'Filials' ), array(
			         Field::make( 'text', 'crb_filials_title_ro', __( 'crb_filials_title_ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_filials_title_ru', __( 'crb_filials_title_ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_filials_title_en', __( 'crb_filials_title_en' ) )
			              ->set_width( 30 ),

			         Field::make( 'text', 'crb_filials_text_ro', __( 'crb_filials_text_ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_filials_text_ru', __( 'crb_filials_text_ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_filials_text_en', __( 'crb_filials_text_en' ) )
			              ->set_width( 30 ),

			         Field::make( 'complex', 'crb_filials_cities', __( 'Filials data' ) )
			              ->add_fields( array(
				              Field::make( 'text', 'crb_filials_city_class', __( 'crb_filials_city_class' ) ),
				              Field::make( 'text', 'crb_filials_city_title_ro', __( 'crb_filials_city_title_ro' ) )
				                   ->set_width( 30 ),
				              Field::make( 'text', 'crb_filials_city_title_ru', __( 'crb_filials_city_title_ru' ) )
				                   ->set_width( 30 ),
				              Field::make( 'text', 'crb_filials_city_title_en', __( 'crb_filials_city_title_en' ) )
				                   ->set_width( 30 ),

				              Field::make( 'text', 'crb_filials_phone_long', __( 'crb_filials_phone_long' ) )
				                   ->set_width( 30 ),
				              Field::make( 'text', 'crb_filials_phone_short', __( 'crb_filials_phone_short' ) )
				                   ->set_width( 30 ),
			              ) )
			              ->set_layout( 'tabbed-horizontal' )

		         ) )
		         ->add_tab( __( 'Contacts footer' ), array(
			         Field::make( 'text', 'crb_contacts_title_ro', __( 'crb_contacts_title_ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_contacts_title_ru', __( 'crb_contacts_title_ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_contacts_title_en', __( 'crb_contacts_title_en' ) )
			              ->set_width( 30 ),

			         Field::make( 'text', 'crb_contacts_title_call_ro', __( 'crb_contacts_title_call_ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_contacts_title_call_ru', __( 'crb_contacts_title_call_ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_contacts_title_call_en', __( 'crb_contacts_title_call_en' ) )
			              ->set_width( 30 ),

			         Field::make( 'text', 'crb_contacts_title_message_ro', __( 'crb_contacts_title_message_ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_contacts_title_message_ru', __( 'crb_contacts_title_message_ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_contacts_title_message_en', __( 'crb_contacts_title_message_en' ) )
			              ->set_width( 30 ),

			         Field::make( 'text', 'crb_contacts_title_address_ro', __( 'crb_contacts_title_address_ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_contacts_title_address_ru', __( 'crb_contacts_title_address_ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_contacts_title_address_en', __( 'crb_contacts_title_address_en' ) )
			              ->set_width( 30 ),

			         Field::make( 'text', 'crb_contacts_phone_ro', __( 'crb_contacts_phone_ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_contacts_phone_ru', __( 'crb_contacts_phone_ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_contacts_phone_en', __( 'crb_contacts_phone_en' ) )
			              ->set_width( 30 ),

			         Field::make( 'text', 'crb_contacts_phone_1', __( 'crb_contacts_phone_1' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_contacts_phone_2', __( 'crb_contacts_phone_2' ) )
			              ->set_width( 30 ),
		         ) )
		         ->add_tab( __( 'Partners' ), array(
			         Field::make( 'text', 'crb_partners_title_ro', __( 'crb_partners_title_ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_partners_title_ru', __( 'crb_partners_title_ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_partners_title_en', __( 'crb_partners_title_en' ) )
			              ->set_width( 30 ),

			         Field::make( 'complex', 'crb_partners_slider', __( 'Partners_slider' ) )
			              ->add_fields( array(
				              Field::make( 'image', 'crb_image', __( 'crb_image' ) )
				              ->set_value_type('url')
			              ) )
			              ->set_layout( 'tabbed-horizontal' )
		         ) )
		         ->add_tab( __( 'Numbers' ), array(
			         Field::make( 'complex', 'crb_slider', __( 'Numbers complex' ) )
			              ->add_fields( array(
				              Field::make( 'text', 'crb_numbers_title', __( 'crb_numbers_title' ) ),

				              Field::make( 'text', 'crb_numbers_text_ro', __( 'crb_numbers_text_ro' ) )
				                   ->set_width( 30 ),
				              Field::make( 'text', 'crb_numbers_text_ru', __( 'crb_numbers_text_ru' ) )
				                   ->set_width( 30 ),
				              Field::make( 'text', 'crb_numbers_text_en', __( 'crb_numbers_text_en' ) )
				                   ->set_width( 30 ),
			              ) )
			              ->set_layout( 'tabbed-horizontal' )
		         ) );


	}

	add_action( 'after_setup_theme', 'crb_load' );
	function crb_load() {
		require_once( __DIR__ . '/../../vendor/autoload.php' );
		\Carbon_Fields\Carbon_Fields::boot();
	}
