<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until content block
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ryancv
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<?php
	$theme_ui = get_field( 'theme_ui', 'options' );
	$theme_ui_class = '';
	if ($theme_ui == 1) {
		$theme_ui_class = 'body-style-dark';
	}
?>

<body <?php body_class($theme_ui_class); ?>>
	<?php wp_body_open(); ?>

	<?php
		$sidebar_disable = get_field( 'sidebar_disable', 'options' );
		$switcher_ui = get_field( 'switcher_ui', 'options' );
		$cart_disable = get_field( 'cart_disable', 'options' );
		$layout_type = get_field( 'layout_type', 'options' );
		$onepage = get_field( 'onepage', 'options' );
		$simple_vcard = get_field( 'simple_vcard', 'options' );
		$mobile_vcard = get_field( 'mobile_vcard', 'options' );
		$sticky_menu = get_field( 'sticky_menu', 'options' );
		$theme_bg = get_field( 'theme_bg', 'options' );
		$animation = get_field( 'theme_animation', 'options' );
		$animation_in = 'fadeInLeft';
		$animation_out = 'fadeOutLeft';
		$theme_type = get_field( 'theme_type', 'options' );
		$theme_style = get_field( 'theme_style', 'options' );
		$theme_ui = get_field( 'theme_ui', 'options' );
		$menu_style = get_field( 'menu_type', 'options' );
		$icons_style = get_field( 'icons_type', 'options' );
		$preloader_hide = get_field( 'preloader_hide', 'options' );
		$preloader_type = get_field( 'preloader_type', 'options' );
		$preloader_bgcolor = get_field( 'preloader_bgcolor', 'options' );

		$theme_type_size = get_field( 'theme_type_size', 'options' );
		$vcard_layout = get_field( 'vcard_layout', 'options' );
		$vcard_bts_glitch = get_field( 'vcard_bts_glitch', 'options' );

		switch ( $animation ) {
			case 0 :
				$animation_in = 'fadeInLeft';
				$animation_out = 'fadeOutLeft';
				break;
			case 1 :
				$animation_in = 'rotateInUpLeft';
				$animation_out = 'rotateOutUpLeft';
				break;
			case 2 :
				$animation_in = 'rollIn';
				$animation_out = 'rollOut';
				break;
			case 3 :
				$animation_in = 'jackInTheBox';
				$animation_out = 'jackOutTheBox';
				break;
			case 4 :
				$animation_in = 'fadeIn';
				$animation_out = 'fadeOut';
				break;
			case 5 :
				$animation_in = 'fadeInUp';
				$animation_out = 'fadeOutUp';
				break;
		}
	?>

	<div class="page page_wrap<?php if ( $simple_vcard ) : ?> simplecard-wrap-enabled<?php endif; ?><?php if ( $theme_style ) : ?> theme-style-classic<?php endif; ?><?php if ( $theme_type ) : ?> theme-style-blured<?php endif; ?><?php if ( $theme_type == 2 ) : ?> theme-style-blured theme-style-cyber<?php endif; ?><?php if ( $theme_ui ) : ?> theme-style-dark<?php endif; ?><?php if ( ! $switcher_ui ) : ?> switcher-ui-disabled<?php endif; ?>">

		<!-- Preloader -->
		<div class="preloader<?php if ( $preloader_hide == 1 ) : ?> is-disabled<?php endif; ?>"<?php if ( $preloader_bgcolor ) : ?> style="background-color: <?php echo esc_attr( $preloader_bgcolor ); ?>;"<?php endif; ?>>
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner <?php if ( $preloader_type == 1 || !$preloader_type ) : ?>default-circle<?php endif; ?><?php echo esc_attr($preloader_type ); ?>"></div>
				</div>
			</div>
		</div>

		<!-- background -->
		<?php if ( !empty( $theme_bg ) ) : ?>
		<?php if ( $theme_bg['type'] == 1 || $theme_bg['type'] == 2 || $theme_bg['type'] == 3 ) : ?>
		<div class="background <?php if ( $theme_bg['type'] == 2 ) : ?>gradient<?php endif; ?>">
			<?php if ( $theme_bg['type'] == 2 ) : ?>
			<ul class="bg-bubbles">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
			<?php endif; ?>
		</div>
		<?php else : ?>
			<?php if ( class_exists( 'RyanCVAdvancedBackground' ) ) : echo do_shortcode( '[ryancv-advanced-background-html]' ); endif; ?>
		<?php endif; ?>
		<?php endif; ?>

		<!--
			Container
		-->
		<div class="container opened<?php if ( $simple_vcard ) : ?> simplecard-enabled<?php endif; ?><?php if ( $mobile_vcard ) : ?> hide-mobile-vcard<?php endif; ?><?php if ( $sidebar_disable ) : ?> disable-sidebar<?php endif; ?><?php if ( ! $sticky_menu ) : ?> no-sticky-menu<?php endif; ?><?php if ( $layout_type == 1 ) : ?> layout-rounded-style<?php endif; ?><?php if ( $layout_type == 2 ) : ?> layout-boxed-style<?php endif; ?><?php if ( $icons_style == 1 ) : ?> solid-icons-style<?php endif; ?><?php if ( $icons_style == 4 ) : ?> solid-icons-style cyber-icons-style<?php endif; ?><?php if ( $icons_style == 2 ) : ?> border-icons-style<?php endif; ?><?php if ( $icons_style == 3 ) : ?> minimal-icons-style<?php endif; ?><?php if ( $vcard_layout == 1 ) : ?> layout-futurism-style<?php endif; ?><?php if ( $theme_type_size == 1 ) : ?> layout-fully-style<?php endif; ?><?php if ( $vcard_bts_glitch == 1 ) : ?> cyber-glitch-lnk<?php endif; ?>" data-animation-in="<?php echo esc_attr( $animation_in ); ?>" data-animation-out="<?php echo esc_attr( $animation_out ); ?>">
			<?php
				$vcard_bg = get_field( 'vcard_bg', 'options' );
				$vcard_bg_type = get_field( 'vcard_bg_type', 'options' );
				$vcard_img_layout = get_field( 'vcard_img_layout', 'options' );
				$vcard_bg_video = get_field( 'vcard_bg_video', 'options' );
				$vcard_bg_images = get_field( 'vcard_bg_images', 'options' );
				$vcard_photo = get_field( 'vcard_photo', 'options' );
				$vcard_title = get_field( 'vcard_title', 'options' );
				if ( empty( $vcard_title ) ) {
					$vcard_title = get_bloginfo( 'name' );
				}
				$vcard_subtitle = get_field( 'vcard_subtitle', 'options' );
				if ( empty( $vcard_subtitle ) ) {
					$vcard_subtitle = get_bloginfo( 'description' );
				}
				$vcard_subtitle_type = get_field( 'vcard_subtitle_type', 'options' );
				$vcard_subtitles = get_field( 'vcard_subtitles', 'options' );
				$vcard_subtitle_glitch = get_field( 'vcard_subtitle_glitch', 'options' );
				$vcard_social = get_field( 'vcard_social', 'options' );
				$vcard_bts = get_field( 'vcard_bts', 'options' );
				$vcard_bts_style = get_field( 'vcard_bts_style', 'options' );
			?>

			<!--
				Header
			-->
			<header class="header">

				<!-- header profile -->
				<div class="profile">
					<?php if ( $vcard_photo ) : ?>
					<div class="image">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<img src="<?php echo esc_url( $vcard_photo['sizes']['ryancv_140x140'] ); ?>" alt="<?php echo esc_attr( $vcard_title ); ?>" /></a>
						</a>
					</div>
					<?php endif; ?>

					<?php if ( $vcard_title ) : ?>
					<div class="title"><?php echo esc_html( $vcard_title ); ?></div>
					<?php endif; ?>

					<?php if ( $vcard_subtitle ||  $vcard_subtitles) : ?>
						<?php if( $vcard_subtitle_type == 2 ) : ?>
							<div class="subtitle subtitle-typed">
								<div class="typing-title">
									<?php foreach( $vcard_subtitles as $item ) { ?>
										<p><?php echo esc_html( $item['text'] ); ?></p>
									<?php } ?>
								</div>
								<span class="r-typed"></span>
							</div>
						<?php else : ?>
							<div class="subtitle">
								<?php echo esc_html( $vcard_subtitle ); ?>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				
				<?php if ( ! $sidebar_disable ) : ?>
				<!-- menu btn -->
				<a href="#" class="menu-btn<?php if ( $switcher_ui || ( !$cart_disable && class_exists( 'WooCommerce' ) ) ) : ?> btn-next-visible<?php endif; ?>"><span></span></a>
				<?php endif; ?>
				
				<?php if ( $switcher_ui ) : ?>
				<!-- switch btn -->
				<div class="mode-switch-btn<?php if ( !$cart_disable && class_exists( 'WooCommerce' ) ) : ?> btn-next-visible<?php endif; ?>" data-ui="<?php echo esc_attr( $theme_ui ); ?>"  data-ui-dir="<?php echo esc_attr( get_template_directory_uri() ); ?>">
					<input class="tgl" id="mode-switch-radio" type="checkbox"<?php if ( $theme_ui == 1 ) : ?> checked<?php endif; ?>>
					<label class="mode-swich-label" for="mode-switch-radio">
						<span class="sw-before">
							<svg xmlns="http://www.w3.org/2000/svg" width="22.22" height="22.313" viewbox="0 0 22.22 22.313">
								<path id="Light_Theme" data-name="Light Theme" fill="#fff" d="M1752.49,105.511a5.589,5.589,0,0,0-3.94-1.655,5.466,5.466,0,0,0-3.94,1.655,5.61,5.61,0,0,0,3.94,9.566,5.473,5.473,0,0,0,3.94-1.653,5.643,5.643,0,0,0,1.65-3.957A5.516,5.516,0,0,0,1752.49,105.511Zm-1.06,6.85a4.1,4.1,0,0,1-5.76,0,4.164,4.164,0,0,1,0-5.788A4.083,4.083,0,0,1,1751.43,112.361Zm7.47-3.662h-2.27a0.768,0.768,0,0,0,0,1.536h2.27A0.768,0.768,0,0,0,1758.9,108.7Zm-10.35,8.12a0.777,0.777,0,0,0-.76.769v2.274a0.777,0.777,0,0,0,.76.767,0.786,0.786,0,0,0,.77-0.767v-2.274A0.786,0.786,0,0,0,1748.55,116.819Zm7.85-.531-1.62-1.624a0.745,0.745,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.625a0.747,0.747,0,0,0,1.06,0A0.759,0.759,0,0,0,1756.4,116.288ZM1748.55,98.3a0.777,0.777,0,0,0-.76.768v2.273a0.778,0.778,0,0,0,.76.768,0.787,0.787,0,0,0,.77-0.768V99.073A0.786,0.786,0,0,0,1748.55,98.3Zm7.88,3.278a0.744,0.744,0,0,0-1.06,0l-1.62,1.624a0.758,0.758,0,0,0,0,1.063,0.745,0.745,0,0,0,1.06,0l1.62-1.624A0.758,0.758,0,0,0,1756.43,101.583Zm-15.96,7.116h-2.26a0.78,0.78,0,0,0-.77.768,0.76,0.76,0,0,0,.77.768h2.26A0.768,0.768,0,0,0,1740.47,108.7Zm2.88,5.965a0.745,0.745,0,0,0-1.06,0l-1.62,1.624a0.759,0.759,0,0,0,0,1.064,0.747,0.747,0,0,0,1.06,0l1.62-1.625A0.758,0.758,0,0,0,1743.35,114.664Zm0-11.457-1.62-1.624a0.744,0.744,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.624a0.745,0.745,0,0,0,1.06,0A0.758,0.758,0,0,0,1743.35,103.207Z" transform="translate(-1737.44 -98.313)"></path>
							</svg>
						</span>
						<span class="sw-after">
							<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewbox="0 0 23 23">
								<path id="Dark_Theme" data-name="Dark Theme" fill="#fff" d="M1759.46,111.076a0.819,0.819,0,0,0-.68.147,8.553,8.553,0,0,1-2.62,1.537,8.167,8.167,0,0,1-2.96.531,8.655,8.655,0,0,1-8.65-8.682,9.247,9.247,0,0,1,.47-2.864,8.038,8.038,0,0,1,1.42-2.54,0.764,0.764,0,0,0-.12-1.063,0.813,0.813,0,0,0-.68-0.148,11.856,11.856,0,0,0-6.23,4.193,11.724,11.724,0,0,0,1,15.387,11.63,11.63,0,0,0,19.55-5.553A0.707,0.707,0,0,0,1759.46,111.076Zm-4.5,6.172a10.137,10.137,0,0,1-14.29-14.145,10.245,10.245,0,0,1,3.38-2.836c-0.14.327-.29,0.651-0.41,1.006a9.908,9.908,0,0,0-.56,3.365,10.162,10.162,0,0,0,10.15,10.189,9.776,9.776,0,0,0,3.49-.62,11.659,11.659,0,0,0,1.12-.473A10.858,10.858,0,0,1,1754.96,117.248Z" transform="translate(-1737 -98)"></path>
							</svg>
						</span>
					</label>
				</div>
				<?php endif; ?>

				<?php if ( ! $cart_disable ) : ?>
				<!-- Woocommerce cart -->
				<?php if ( class_exists( 'WooCommerce' ) ) : ?>
					<?php if ( true == get_theme_mod( 'cart_shop', true ) ) : ?>
						<div class="cart-btn">
							<div class="cart-icon">
								<span class="ion ion-android-cart"></span>
								<span class="cart-count"><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'ryancv' ), WC()->cart->get_cart_contents_count() ); ?></span>
							</div>
							<div class="cart-widget">
								<?php woocommerce_mini_cart(); ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>
				<?php endif; ?>

				<?php if ( $sticky_menu ) : ?>
				<!-- menu -->
				<?php if ( $onepage ) : ?>
					<div class="top-menu top-menu-onepage<?php if ( $menu_style == 1 ) : ?> menu-minimal<?php endif; ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'walker' => new Ryancv_Onepage_Walker()
							) );
						?>
					</div>
				<?php else : ?>
					<div class="top-menu<?php if ( $menu_style == 1 ) : ?> menu-minimal<?php endif; ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary'
							) );
						?>
					</div>
				<?php endif; ?>
				<?php endif; ?>

			</header>

			<!--
				Card - Started
			-->
			<div class="card-started<?php if ( $vcard_img_layout == 7 ) : ?> full-style-cyber<?php endif; ?>" id="home-card">

				<!--
					Profile
				-->
				<div class="profile<?php if ( ! $vcard_photo ) : ?> no-photo<?php endif; ?><?php if ( $vcard_img_layout == 1 ) : ?> boxed-style<?php endif; ?><?php if ( $vcard_img_layout == 2 ) : ?> rounded-style-1<?php endif; ?><?php if ( $vcard_img_layout == 3 ) : ?> rounded-style-2<?php endif; ?><?php if ( $vcard_img_layout == 4 ) : ?> rabbet-style<?php endif; ?><?php if ( $vcard_img_layout == 5 ) : ?> trapezoid-style<?php endif; ?><?php if ( $vcard_img_layout == 6 || $vcard_img_layout == 7 ) : ?> full-style<?php endif; ?>">
					<div class="profile-content">

						<?php if ( $vcard_bg_type == 0 || !$vcard_bg_type ) : ?>
						<!-- profile image -->
						<div class="slide"
							<?php if ( $vcard_bg ) : ?>style="background-image: url(<?php echo esc_url( $vcard_bg['url'] ); ?>);"<?php endif; ?>
						>
						</div>
						<?php endif; ?>

						<?php if ( $vcard_bg_type == 1 ) : ?>
						<!-- profile video -->
						<div class="slide">
							<?php if ( $vcard_bg_video ) : ?>
							<video autoplay muted loop controls playsinline id="myVideo">
								<source src="<?php echo esc_url( $vcard_bg_video ); ?>" type="video/mp4">
							</video>
							<?php endif; ?>
						</div>
						<?php endif; ?>

						<!-- profile slideshow -->
						<?php if ( $vcard_bg_type == 2 ) : ?>
						<div class="slide">
							<?php if ( $vcard_bg_images ) : ?>
							<div class="swiper-container ryan-slideshow">
								<div class="swiper-wrapper">
									<?php foreach ( $vcard_bg_images as $slide ) : $slide_url = wp_get_attachment_image_url( $slide['image'], 'ryancv_600xauto' ); ?>
									<div class="swiper-slide">
										<img src="<?php echo esc_url( $slide_url ); ?>" alt="<?php echo esc_attr( $vcard_title ); ?>" class="ryan-banner-cover" data-swiper-parallax-y="-30" data-swiper-parallax-scale="1.2">
									</div>
									<?php endforeach; ?>
								</div>
							</div>
							<?php endif; ?>
						</div>
						<?php endif; ?>

						<?php if ( $vcard_photo ) : ?>
						<!-- profile photo -->
						<div class="image">
							<a href="<?php echo esc_url( home_url() ); ?>">
								<img src="<?php echo esc_url( $vcard_photo['sizes']['ryancv_280x280'] ); ?>" alt="<?php echo esc_attr( $vcard_title ); ?>" />
							</a>
						</div>
						<?php endif; ?>

						<!-- profile titles -->
						<?php if ( $vcard_title ) : ?>
						<div class="title"><?php echo wp_kses_post( $vcard_title ); ?></div>
						<?php endif; ?>

						<?php if ( $vcard_subtitle ||  $vcard_subtitles) : ?>
						<?php if( $vcard_subtitle_type == 2 ) : ?>
						<div class="subtitle subtitle-typed">
							<div class="typing-title">
								<?php foreach( $vcard_subtitles as $item ) { ?>
									<p><?php echo wp_kses_post( $item['text'] ); ?></p>
								<?php } ?>
							</div>
							<span class="r-typed<?php if ( $vcard_subtitle_glitch == 1 ) : ?> cyber-glitch<?php endif; ?>"></span>
						</div>
						<?php else : ?>
						<div class="subtitle<?php if ( $vcard_subtitle_glitch == 1 ) : ?> cyber-glitch<?php endif; ?>">
							<?php echo esc_html( $vcard_subtitle ); ?>
						</div>
						<?php endif; ?>
						<?php endif; ?>

						<?php if ( $vcard_social ) : ?>
						<!-- profile socials -->
						<div class="social">
							<?php foreach ( $vcard_social as $item ) { ?>
							<a target="_blank" href="<?php echo esc_url( $item['url'] ); ?>">
								<span class="<?php echo esc_attr( $item['icon'] ); ?>"></span>
							</a>
							<?php } ?>
						</div>
						<?php endif; ?>

					</div>

					<?php if ( $vcard_bts && $sticky_menu || $simple_vcard ) : ?>
					<!-- profile buttons -->
					<div class="lnks<?php if ( $vcard_bts_glitch == 1 ) : ?> cyber-glitch-lnks<?php endif; ?>">
						<?php foreach ( $vcard_bts as $item ) { ?>
						<?php if ( $item['url'] ) : ?>
						<a href="<?php echo esc_url( $item['url']['url'] ); ?>" class="lnk<?php if( $vcard_bts_style == 1 ) : ?> solid-style<?php endif; ?>" <?php if ( $item['url']['target'] ) : ?>target="<?php echo esc_attr( $item['url']['target'] ); ?>"<?php endif; ?>>
							<span class="text"><?php echo esc_html( $item['text'] ); ?></span>
							<?php if ( $item['icon'] != 'ion-none' ) : ?>
							<span class="ion <?php echo esc_attr( $item['icon'] ); ?>"></span>
							<?php endif; ?>
						</a>
						<?php else : ?>
						<a href="#" class="lnk">
							<span class="text"><?php echo esc_html( $item['text'] ); ?></span>
							<?php if ( $item['icon'] != 'ion-none' ) : ?>
							<span class="ion <?php echo esc_attr( $item['icon'] ); ?>"></span>
							<?php endif; ?>
						</a>
						<?php endif; ?>
						<?php } ?>
					</div>
					<?php else : ?>
					<!-- default menu -->
					<div class="main-menu-fixed">
						<div class="main-menu">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary'
								) );
							?>
						</div>
					</div>
					<!-- menu button -->
					<div class="lnks">
						<a href="#" class="lnk lnk-view-menu">
							<span class="ion ion-android-more-horizontal"></span>
							<span class="text" data-text-open="<?php echo esc_attr__( 'Close', 'ryancv' ); ?>"><?php echo esc_html__( 'Menu', 'ryancv' ); ?></span>
						</a>
					</div>
					<?php endif; ?>

				</div>

			</div>

			<div class="s_overlay"></div>
			<div class="content-sidebar">
				<div class="sidebar-wrap">
					<?php if ( ! $sticky_menu ) : ?>
					<div class="main-menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary'
							) );
						?>
					</div>
					<?php endif; ?>

					<?php if ( ! $sidebar_disable && is_active_sidebar( 'sidebar-1' ) ) : ?>
						<?php get_sidebar(); ?>
					<?php endif; ?>
				</div>

				<span class="close"></span>
			</div>
