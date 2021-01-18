<?php
/* Template name: Oferta page */
?>

<?php
	get_header();
?>

	<main class="main">

		<section class="oferta tabs">
			<div class="container">

				<h2 class="oferta__title h2">Oferta</h2>

				<div class="oferta__list tabs__list">
					<div class="oferta__item oferta__item--one oferta__item--active tabs__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about__list_img1.png" alt="" class="oferta__item_img">
						
						<div class="oferta__item_content">
							<h3>Panele fotowoltaiczne</h3>
							<p>
								Panele wykorzystywane w
								naszych instalacjach produkowane są
								przez najlepszych i najbardziej
								uznanych producentów na świecie.
							</p>
						</div>
					</div>
					<div class="oferta__item oferta__item--two tabs__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about__list_img2.png" alt="" class="oferta__item_img">
						<div class="oferta__item_content">
							<h3>Falowniki</h3>
							<p>
								Falowniki w instalacjach
								fotowoltaicznych powinny
								charakteryzować się wysoką
								sprawnością i niezawodnością działania.
								Poznaj naszą ofertę falowników!
							</p>
						</div>
					</div>
					<div class="oferta__item oferta__item--three tabs__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about__list_img3.png" alt="" class="oferta__item_img">
						<div class="oferta__item_content">
							<h3> Systemy montażowe oraz zabezpieczenia elektryczne</h3>
							<p>
								Panele wykorzystywane w
								naszych instalacjach produkowane są
								przez najlepszych i najbardziej
								uznanych producentów na świecie.
							</p>
						</div>
					</div>
				</div>

				<div class="oferta__logo">
					<div class="oferta__wrap tabs__wrap">
						<div class="oferta__logo_list">
							<a href="#" class="oferta__logo_item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta__logo1.jpg" alt="">
							</a>
							<a href="#" class="oferta__logo_item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta__logo2.jpg" alt="">
							</a>
							<a href="#" class="oferta__logo_item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta__logo3.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="oferta__wrap tabs__wrap">
						<div class="oferta__logo_list">
							<a href="#" class="oferta__logo_item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta__logo2.jpg" alt="">
							</a>
							<a href="#" class="oferta__logo_item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta__logo1.jpg" alt="">
							</a>
							<a href="#" class="oferta__logo_item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta__logo3.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="oferta__wrap tabs__wrap">
						<div class="oferta__logo_list">
							<a href="#" class="oferta__logo_item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta__logo1.jpg" alt="">
							</a>
							<a href="#" class="oferta__logo_item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta__logo3.jpg" alt="">
							</a>
							<a href="#" class="oferta__logo_item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta__logo2.jpg" alt="">
							</a>
						</div>
					</div>
				</div>

				<div class="oferta__btn">
					<a href="#" class="btn modal--two">Skontaktuj się z nami!</a>
				</div>

			</div>
		</section>

	</main>

<?php
	get_footer();
