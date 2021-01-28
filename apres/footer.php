
	<?php get_template_part( 'parts/modal' ); ?>

	<footer class="footer">
		<div class="footer__container container">

			<div class="footer__col">
				<a href="<?php echo get_home_url(); ?>" class="footer__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
				</a>
				<div class="footer__soc">
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
					<a href="tel:<?php the_field('phone', 'option'); ?>">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24ZM16.2836 12.2487C16.4018 12.2775 16.5224 12.3069 16.6388 12.3069C17.0947 12.3886 17.508 12.6261 17.8083 12.9787C18.1086 13.3312 18.2773 13.7771 18.2854 14.2402V16.2402C18.2868 16.5232 18.228 16.8032 18.1131 17.0618C17.9982 17.3203 17.8297 17.5516 17.6188 17.7402C17.2517 18.0672 16.7771 18.2476 16.2854 18.2469H16.0321C13.2379 17.9019 10.6383 16.6358 8.64388 14.6486C6.64946 12.6615 5.37394 10.0665 5.01878 7.27354C4.9795 6.98892 5.00201 6.69917 5.08477 6.42402C5.16753 6.14887 5.30861 5.89479 5.4984 5.67907C5.68818 5.46334 5.92222 5.29104 6.18458 5.1739C6.44694 5.05675 6.73147 4.99751 7.01878 5.00021H9.01878C9.49524 4.99328 9.95852 5.1567 10.3252 5.46104C10.6919 5.76537 10.9378 6.19062 11.0188 6.66021C11.0388 6.81354 11.0654 6.96688 11.0988 7.11354C11.1661 7.41008 11.2529 7.70183 11.3588 7.98688C11.4713 8.29615 11.4654 8.63611 11.3424 8.94134C11.2193 9.24656 10.9877 9.49549 10.6921 9.64021L10.4121 9.82688C10.7733 10.4762 11.222 11.0729 11.7454 11.6002C12.2728 12.1237 12.8694 12.5723 13.5188 12.9335L13.6654 12.6335C13.8102 12.338 14.0591 12.1064 14.3643 11.9833C14.6695 11.8602 15.0095 11.8544 15.3188 11.9669C15.6032 12.0745 15.8951 12.1614 16.1921 12.2269C16.2224 12.2338 16.2529 12.2412 16.2836 12.2487ZM16.9126 16.5813C16.9517 16.4951 16.972 16.4015 16.9721 16.3069L16.9588 14.2269C16.9622 14.0718 16.9115 13.9205 16.8154 13.7988C16.7193 13.6771 16.5837 13.5927 16.4321 13.5602C16.2499 13.5335 16.0699 13.5002 15.8921 13.4602C15.5352 13.3792 15.1834 13.2768 14.8388 13.1535L14.4254 14.0869C14.3882 14.1669 14.3355 14.2388 14.2702 14.2983C14.205 14.3578 14.1286 14.4038 14.0454 14.4335C13.8831 14.5002 13.7011 14.5002 13.5388 14.4335C11.4836 13.4741 9.83158 11.822 8.87211 9.76688C8.83514 9.68724 8.81426 9.60109 8.81068 9.51336C8.80709 9.42563 8.82087 9.33806 8.85122 9.25567C8.88158 9.17329 8.92791 9.09771 8.98755 9.03327C9.04719 8.96884 9.11898 8.91683 9.19878 8.88021L10.1321 8.44688C10.005 8.11033 9.90246 7.76497 9.82544 7.41354C9.78544 7.23577 9.75211 7.05577 9.72544 6.87354C9.69292 6.72192 9.60855 6.58639 9.48687 6.49026C9.36519 6.39413 9.21381 6.34343 9.05878 6.34688H7.05878C6.96412 6.347 6.87058 6.36727 6.78436 6.40636C6.69815 6.44544 6.62125 6.50243 6.55878 6.57354C6.49549 6.64867 6.44809 6.73585 6.41945 6.82981C6.3908 6.92376 6.3815 7.02256 6.39211 7.12021C6.70039 9.61844 7.83158 11.9429 9.60725 13.7271C11.3829 15.5112 13.702 16.6534 16.1988 16.9735C16.2965 16.9854 16.3956 16.9766 16.4897 16.9479C16.5838 16.9192 16.671 16.8712 16.7454 16.8069C16.8166 16.7444 16.8736 16.6675 16.9126 16.5813Z" fill="white"/>
						</svg>
					</a>
				</div>
			</div>

			<div class="footer__col">
				<div class="footer__subtitle">Menu</div>
				<?php 
					wp_nav_menu( array(
					'menu'=>'menu-footer',
					'menu_class'=>'list',
					'theme_location'=>'menu',
					) );
				?>
			</div>

			<div class="footer__col">
				<div class="footer__subtitle">Dodatkowo</div>
				<?php 
					wp_nav_menu( array(
					'menu'=>'menu-footer2',
					'menu_class'=>'list',
					'theme_location'=>'menu',
					) );
				?>
			</div>

			<div class="footer__col">
				<form action="#" class="footer__form form">
					<p class="footer__form_line">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14 11.5099H16.42C16.5516 11.5107 16.6821 11.4855 16.8039 11.4357C16.9257 11.386 17.0366 11.3126 17.13 11.2199L21.71 6.63995C21.8037 6.54699 21.8781 6.43638 21.9289 6.31453C21.9797 6.19267 22.0058 6.06196 22.0058 5.92995C22.0058 5.79794 21.9797 5.66723 21.9289 5.54537C21.8781 5.42351 21.8037 5.31291 21.71 5.21995L19.29 2.79995C19.197 2.70622 19.0864 2.63183 18.9646 2.58106C18.8427 2.53029 18.712 2.50415 18.58 2.50415C18.448 2.50415 18.3173 2.53029 18.1954 2.58106C18.0736 2.63183 17.963 2.70622 17.87 2.79995L13.29 7.37995C13.1073 7.57158 13.0037 7.82518 13 8.08995V10.5099C13 10.7752 13.1054 11.0295 13.2929 11.2171C13.4804 11.4046 13.7348 11.5099 14 11.5099ZM15 8.50995L18.58 4.92995L19.58 5.92995L16 9.50995H15V8.50995ZM21 10.5099C20.7348 10.5099 20.4804 10.6153 20.2929 10.8028C20.1054 10.9904 20 11.2447 20 11.5099V18.5099C20 18.7752 19.8946 19.0295 19.7071 19.2171C19.5196 19.4046 19.2652 19.5099 19 19.5099H5C4.73478 19.5099 4.48043 19.4046 4.29289 19.2171C4.10536 19.0295 4 18.7752 4 18.5099V8.89995L9.88 14.7899C10.1591 15.0726 10.4915 15.2971 10.858 15.4503C11.2245 15.6035 11.6178 15.6824 12.015 15.6824C12.4122 15.6824 12.8055 15.6035 13.172 15.4503C13.5385 15.2971 13.8709 15.0726 14.15 14.7899C14.3332 14.603 14.4359 14.3517 14.4359 14.0899C14.4359 13.8282 14.3332 13.5769 14.15 13.3899C14.0569 13.2947 13.9456 13.219 13.8229 13.1674C13.7001 13.1157 13.5682 13.0891 13.435 13.0891C13.3018 13.0891 13.1699 13.1157 13.0471 13.1674C12.9244 13.219 12.8131 13.2947 12.72 13.3899C12.5331 13.5732 12.2818 13.6758 12.02 13.6758C11.7582 13.6758 11.5069 13.5732 11.32 13.3899L5.41 7.48995H10C10.2652 7.48995 10.5196 7.38459 10.7071 7.19706C10.8946 7.00952 11 6.75517 11 6.48995C11 6.22473 10.8946 5.97038 10.7071 5.78284C10.5196 5.59531 10.2652 5.48995 10 5.48995H5C4.20435 5.48995 3.44129 5.80602 2.87868 6.36863C2.31607 6.93124 2 7.6943 2 8.48995V18.4899C2 19.2856 2.31607 20.0487 2.87868 20.6113C3.44129 21.1739 4.20435 21.4899 5 21.4899H19C19.7956 21.4899 20.5587 21.1739 21.1213 20.6113C21.6839 20.0487 22 19.2856 22 18.4899V11.4899C22 11.2247 21.8946 10.9704 21.7071 10.7828C21.5196 10.5953 21.2652 10.4899 21 10.4899V10.5099Z" fill="white"/>
						</svg>
						Bądź na bieżąco z najnowszymi wiadomościami
					</p>
					<p class="footer__form_line">
						<input type="email" name="email" placeholder="Wprowadź swój email adress" class="_req">
					</p>
					<div class="form__item">
						<div class="form__checkbox">
							<input id="formAgreement12" checked type="checkbox" name="agreement" class="form__checkbox_input _req">
							<label for="formAgreement12" class="form__checkbox_label">
								<span>
									Potwierdzam, że zapoznałem (-am) się z 
									<a href="<?php echo get_home_url(); ?>/cookies" target="_blank">
										Klauzulą informacyjną dotyczącą przetwarzania danych
									</a>
									osobowych przez APRES Technology Damian Pilarski i wyrażam zgodę na kontakt w celu przedstawienia oferty.
								</span>
							</label>
						</div>
					</div>
					<div class="footer__form_btn">
						<button class="btn">Wysłać</button>
					</div>
				</form>
				<p class="footer__copy"><a href="http://flex-design.pl/" target="_blank">Designed and created by Flexdesign</a></p>
			</div>

		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
