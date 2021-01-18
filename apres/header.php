<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title("", true); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">
	<meta name="theme-color" content="#000">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

</head>

<?php wp_head(); ?>

<body>

	<header class="header">
		<div class="container">
			<div class="header__container">

				<a href="<?php echo get_home_url(); ?>" class="header__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
				</a>
	
				<nav class="header__nav">
					<div class="header__nav_wrap">
						<?php 
							wp_nav_menu( array(
							'menu'=>'menu',
							'menu_class'=>'header__nav_list',
							'theme_location'=>'menu',
							) );
						?>
						<div class="header__nav_info">
							<div class="header__nav_soc">
								<a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4688H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9701 4.6875 17.3438 4.92188 17.3438 4.92188V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.75V12H17.2031L16.6711 15.4688H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z" fill="white"/>
									</svg>
								</a>
								<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2.16094C15.2063 2.16094 15.5859 2.175 16.8469 2.23125C18.0188 2.28281 18.6516 2.47969 19.0734 2.64375C19.6313 2.85938 20.0344 3.12188 20.4516 3.53906C20.8734 3.96094 21.1313 4.35938 21.3469 4.91719C21.5109 5.33906 21.7078 5.97656 21.7594 7.14375C21.8156 8.40937 21.8297 8.78906 21.8297 11.9906C21.8297 15.1969 21.8156 15.5766 21.7594 16.8375C21.7078 18.0094 21.5109 18.6422 21.3469 19.0641C21.1313 19.6219 20.8687 20.025 20.4516 20.4422C20.0297 20.8641 19.6313 21.1219 19.0734 21.3375C18.6516 21.5016 18.0141 21.6984 16.8469 21.75C15.5813 21.8062 15.2016 21.8203 12 21.8203C8.79375 21.8203 8.41406 21.8062 7.15313 21.75C5.98125 21.6984 5.34844 21.5016 4.92656 21.3375C4.36875 21.1219 3.96563 20.8594 3.54844 20.4422C3.12656 20.0203 2.86875 19.6219 2.65313 19.0641C2.48906 18.6422 2.29219 18.0047 2.24063 16.8375C2.18438 15.5719 2.17031 15.1922 2.17031 11.9906C2.17031 8.78438 2.18438 8.40469 2.24063 7.14375C2.29219 5.97187 2.48906 5.33906 2.65313 4.91719C2.86875 4.35938 3.13125 3.95625 3.54844 3.53906C3.97031 3.11719 4.36875 2.85938 4.92656 2.64375C5.34844 2.47969 5.98594 2.28281 7.15313 2.23125C8.41406 2.175 8.79375 2.16094 12 2.16094ZM12 0C8.74219 0 8.33438 0.0140625 7.05469 0.0703125C5.77969 0.126563 4.90313 0.332812 4.14375 0.628125C3.35156 0.9375 2.68125 1.34531 2.01563 2.01562C1.34531 2.68125 0.9375 3.35156 0.628125 4.13906C0.332812 4.90313 0.126563 5.775 0.0703125 7.05C0.0140625 8.33437 0 8.74219 0 12C0 15.2578 0.0140625 15.6656 0.0703125 16.9453C0.126563 18.2203 0.332812 19.0969 0.628125 19.8563C0.9375 20.6484 1.34531 21.3188 2.01563 21.9844C2.68125 22.65 3.35156 23.0625 4.13906 23.3672C4.90313 23.6625 5.775 23.8687 7.05 23.925C8.32969 23.9812 8.7375 23.9953 11.9953 23.9953C15.2531 23.9953 15.6609 23.9812 16.9406 23.925C18.2156 23.8687 19.0922 23.6625 19.8516 23.3672C20.6391 23.0625 21.3094 22.65 21.975 21.9844C22.6406 21.3188 23.0531 20.6484 23.3578 19.8609C23.6531 19.0969 23.8594 18.225 23.9156 16.95C23.9719 15.6703 23.9859 15.2625 23.9859 12.0047C23.9859 8.74688 23.9719 8.33906 23.9156 7.05938C23.8594 5.78438 23.6531 4.90781 23.3578 4.14844C23.0625 3.35156 22.6547 2.68125 21.9844 2.01562C21.3188 1.35 20.6484 0.9375 19.8609 0.632812C19.0969 0.3375 18.225 0.13125 16.95 0.075C15.6656 0.0140625 15.2578 0 12 0Z" fill="white"/>
										<path d="M12 5.83594C8.59688 5.83594 5.83594 8.59688 5.83594 12C5.83594 15.4031 8.59688 18.1641 12 18.1641C15.4031 18.1641 18.1641 15.4031 18.1641 12C18.1641 8.59688 15.4031 5.83594 12 5.83594ZM12 15.9984C9.79219 15.9984 8.00156 14.2078 8.00156 12C8.00156 9.79219 9.79219 8.00156 12 8.00156C14.2078 8.00156 15.9984 9.79219 15.9984 12C15.9984 14.2078 14.2078 15.9984 12 15.9984Z" fill="white"/>
										<path d="M19.8469 5.59214C19.8469 6.38902 19.2 7.0312 18.4078 7.0312C17.6109 7.0312 16.9688 6.38433 16.9688 5.59214C16.9688 4.79526 17.6156 4.15308 18.4078 4.15308C19.2 4.15308 19.8469 4.79995 19.8469 5.59214Z" fill="white"/>
									</svg>
								</a>
								<a href="mailto:<?php the_field('email', 'option'); ?>">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24ZM5.15901 6.65901C5.58097 6.23705 6.15326 6 6.75 6H17.25C17.8467 6 18.419 6.23705 18.841 6.65901C19.2629 7.08097 19.5 7.65326 19.5 8.25V15.75C19.5 16.3467 19.2629 16.919 18.841 17.341C18.419 17.7629 17.8467 18 17.25 18H6.75C6.15326 18 5.58097 17.7629 5.15901 17.341C4.73705 16.919 4.5 16.3467 4.5 15.75V8.25C4.5 7.65326 4.73705 7.08097 5.15901 6.65901ZM12.5325 11.91L16.9425 7.5H7.0575L11.4675 11.91C11.5372 11.9803 11.6202 12.0361 11.7116 12.0742C11.803 12.1122 11.901 12.1318 12 12.1318C12.099 12.1318 12.197 12.1122 12.2884 12.0742C12.3798 12.0361 12.4628 11.9803 12.5325 11.91ZM17.7803 16.2803C17.921 16.1397 18 15.9489 18 15.75V8.5575L13.59 12.9675C13.1681 13.3889 12.5963 13.6255 12 13.6255C11.4037 13.6255 10.8319 13.3889 10.41 12.9675L6 8.5575V15.75C6 15.9489 6.07902 16.1397 6.21967 16.2803C6.36032 16.421 6.55109 16.5 6.75 16.5H17.25C17.4489 16.5 17.6397 16.421 17.7803 16.2803Z" fill="white"/>
									</svg>
								</a>
							</div>
							<a href="tel:<?php the_field('phone', 'option'); ?>" class="header__nav_tel">
								<b>
									<?php the_field('phone', 'option'); ?>
								</b>
							</a>
							<a href="#" class="btn modal--next">Skontaktuj się z nami</a>
						</div>
					</div>
				</nav>
	
				<button class="hamburger" type="button">
					<span class="hamburger__item"></span>
				</button>

			</div>
		</div>
	</header>




