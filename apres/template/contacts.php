<?php
/* Template name: Contacts page */
?>

<?php
	get_header();
?>

<main class="main">

	<section class="contacts">
		<div class="container">
			
			<div class="contacts__container">

				<div class="contacts__col">
					<h2 class="contacts__title h2">Kontakt</h2>
					<div class="contacts__list">
						<div class="contacts__list_item">
							<p class="contacts__list_subtitle">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.0002 1.66663C8.23205 1.66663 6.53636 2.36901 5.28612 3.61925C4.03588 4.86949 3.3335 6.56518 3.3335 8.33329C3.3335 12.8333 9.2085 17.9166 9.4585 18.1333C9.60944 18.2624 9.80153 18.3333 10.0002 18.3333C10.1988 18.3333 10.3909 18.2624 10.5418 18.1333C10.8335 17.9166 16.6668 12.8333 16.6668 8.33329C16.6668 6.56518 15.9644 4.86949 14.7142 3.61925C13.464 2.36901 11.7683 1.66663 10.0002 1.66663ZM10.0002 16.375C8.22516 14.7083 5.00016 11.1166 5.00016 8.33329C5.00016 7.00721 5.52695 5.73544 6.46463 4.79776C7.40231 3.86008 8.67408 3.33329 10.0002 3.33329C11.3262 3.33329 12.598 3.86008 13.5357 4.79776C14.4734 5.73544 15.0002 7.00721 15.0002 8.33329C15.0002 11.1166 11.7752 14.7166 10.0002 16.375ZM10.0002 4.99996C9.34089 4.99996 8.69643 5.19546 8.14826 5.56173C7.6001 5.928 7.17286 6.44859 6.92056 7.05768C6.66827 7.66677 6.60226 8.33699 6.73088 8.98359C6.8595 9.6302 7.17696 10.2241 7.64314 10.6903C8.10931 11.1565 8.70326 11.474 9.34986 11.6026C9.99646 11.7312 10.6667 11.6652 11.2758 11.4129C11.8849 11.1606 12.4055 10.7334 12.7717 10.1852C13.138 9.63703 13.3335 8.99256 13.3335 8.33329C13.3335 7.44924 12.9823 6.60139 12.3572 5.97627C11.7321 5.35115 10.8842 4.99996 10.0002 4.99996ZM10.0002 9.99996C9.67053 9.99996 9.34829 9.90221 9.07421 9.71908C8.80013 9.53594 8.58651 9.27564 8.46036 8.9711C8.33422 8.66655 8.30121 8.33144 8.36552 8.00814C8.42983 7.68484 8.58856 7.38787 8.82165 7.15478C9.05474 6.92169 9.35171 6.76296 9.67501 6.69865C9.99831 6.63434 10.3334 6.66735 10.638 6.79349C10.9425 6.91964 11.2028 7.13326 11.3859 7.40734C11.5691 7.68142 11.6668 8.00366 11.6668 8.33329C11.6668 8.77532 11.4912 9.19924 11.1787 9.5118C10.8661 9.82436 10.4422 9.99996 10.0002 9.99996Z" fill="#FFA703"/>
								</svg>
								<span>Adres</span>
							</p>
							<p><?php the_field('place', 'option'); ?></p>
						</div>
						<div class="contacts__list_item">
							<p class="contacts__list_subtitle">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.9582 7.5C13.0619 7.53951 13.1722 7.55929 13.2832 7.55834H16.6165C16.8375 7.55834 17.0495 7.47054 17.2058 7.31426C17.362 7.15798 17.4498 6.94602 17.4498 6.725C17.4498 6.50399 17.362 6.29203 17.2058 6.13575C17.0495 5.97947 16.8375 5.89167 16.6165 5.89167H15.2915L18.0332 3.15C18.1204 3.0753 18.1913 2.98336 18.2413 2.87998C18.2913 2.77659 18.3194 2.66398 18.3238 2.54921C18.3283 2.43445 18.3089 2.32 18.267 2.21307C18.2251 2.10613 18.1616 2.00901 18.0804 1.92779C17.9992 1.84658 17.902 1.78303 17.7951 1.74114C17.6882 1.69924 17.5737 1.6799 17.459 1.68434C17.3442 1.68877 17.2316 1.71688 17.1282 1.7669C17.0248 1.81692 16.9329 1.88777 16.8582 1.975L14.1165 4.70834V3.38334C14.1165 3.16232 14.0287 2.95036 13.8724 2.79408C13.7161 2.6378 13.5042 2.55 13.2832 2.55C13.0622 2.55 12.8502 2.6378 12.6939 2.79408C12.5376 2.95036 12.4498 3.16232 12.4498 3.38334V6.71667C12.4489 6.82769 12.4687 6.93791 12.5082 7.04167C12.5491 7.14404 12.61 7.23726 12.6872 7.31593C12.7645 7.39461 12.8566 7.45717 12.9582 7.5ZM16.1998 10.8333C16.0165 10.8333 15.8248 10.775 15.6415 10.7333C15.2702 10.6515 14.9054 10.5429 14.5498 10.4083C14.1632 10.2677 13.7383 10.275 13.3568 10.4288C12.9752 10.5827 12.6641 10.8722 12.4832 11.2417L12.2998 11.6167C11.4882 11.1652 10.7423 10.6044 10.0832 9.95C9.42881 9.29085 8.86803 8.545 8.41651 7.73334L8.76651 7.5C9.13598 7.3191 9.42549 7.00794 9.57933 6.62641C9.73318 6.24488 9.74048 5.81993 9.59984 5.43334C9.46753 5.07702 9.35895 4.71233 9.27484 4.34167C9.23317 4.15834 9.19984 3.96667 9.17484 3.775C9.07364 3.18802 8.76619 2.65645 8.30786 2.27603C7.84952 1.89562 7.27042 1.69134 6.67484 1.7H4.17484C3.8157 1.69663 3.46005 1.77068 3.1321 1.91711C2.80415 2.06354 2.5116 2.27892 2.27437 2.54857C2.03713 2.81823 1.86079 3.13583 1.75733 3.47976C1.65387 3.8237 1.62574 4.18588 1.67484 4.54167C2.11879 8.03282 3.7132 11.2766 6.20622 13.7605C8.69924 16.2445 11.9488 17.8271 15.4415 18.2583H15.7582C16.3727 18.2592 16.966 18.0338 17.4248 17.625C17.6885 17.3892 17.8991 17.1002 18.0427 16.7769C18.1864 16.4537 18.2598 16.1037 18.2582 15.75V13.25C18.248 12.6712 18.0372 12.1138 17.6618 11.6731C17.2864 11.2323 16.7697 10.9355 16.1998 10.8333ZM16.6165 15.8333C16.6164 15.9517 16.591 16.0686 16.5422 16.1764C16.4933 16.2841 16.4221 16.3802 16.3332 16.4583C16.2401 16.5387 16.1312 16.5988 16.0135 16.6347C15.8958 16.6705 15.772 16.6814 15.6498 16.6667C12.5289 16.2665 9.63004 14.8387 7.41044 12.6086C5.19084 10.3784 3.77685 7.47278 3.39151 4.35C3.37824 4.22793 3.38987 4.10444 3.42567 3.98699C3.46148 3.86955 3.52073 3.76058 3.59984 3.66667C3.67793 3.57778 3.77406 3.50654 3.88182 3.45768C3.98959 3.40883 4.10652 3.38349 4.22484 3.38334H6.72484C6.91863 3.37902 7.10786 3.4424 7.25996 3.56256C7.41206 3.68272 7.51751 3.85214 7.55817 4.04167C7.59151 4.26945 7.63317 4.49445 7.68317 4.71667C7.77944 5.15596 7.90756 5.58765 8.06651 6.00834L6.89984 6.55C6.80009 6.59577 6.71036 6.66079 6.6358 6.74133C6.56125 6.82187 6.50334 6.91635 6.4654 7.01933C6.42746 7.12231 6.41023 7.23178 6.41471 7.34144C6.41919 7.4511 6.44529 7.55879 6.49151 7.65834C7.69084 10.2273 9.75588 12.2923 12.3248 13.4917C12.5277 13.575 12.7553 13.575 12.9582 13.4917C13.0621 13.4545 13.1576 13.397 13.2391 13.3227C13.3207 13.2483 13.3866 13.1584 13.4332 13.0583L13.9498 11.8917C14.3806 12.0457 14.8203 12.1737 15.2665 12.275C15.4887 12.325 15.7137 12.3667 15.9415 12.4C16.131 12.4407 16.3005 12.5461 16.4206 12.6982C16.5408 12.8503 16.6042 13.0395 16.5998 13.2333L16.6165 15.8333Z" fill="#FFA703"/>
								</svg>
								<span>Telefon</span>
							</p>
							<p><a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></p>
						</div>
						<div class="contacts__list_item">
							<p class="contacts__list_subtitle">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.8332 3.33337H4.1665C3.50346 3.33337 2.86758 3.59677 2.39874 4.06561C1.9299 4.53445 1.6665 5.17033 1.6665 5.83337V14.1667C1.6665 14.8297 1.9299 15.4656 2.39874 15.9345C2.86758 16.4033 3.50346 16.6667 4.1665 16.6667H15.8332C16.4962 16.6667 17.1321 16.4033 17.6009 15.9345C18.0698 15.4656 18.3332 14.8297 18.3332 14.1667V5.83337C18.3332 5.17033 18.0698 4.53445 17.6009 4.06561C17.1321 3.59677 16.4962 3.33337 15.8332 3.33337ZM15.4915 5.00004L10.5915 9.90004C10.514 9.97815 10.4219 10.0401 10.3203 10.0824C10.2188 10.1248 10.1098 10.1465 9.99984 10.1465C9.88983 10.1465 9.78091 10.1248 9.67936 10.0824C9.57781 10.0401 9.48564 9.97815 9.40817 9.90004L4.50817 5.00004H15.4915ZM16.6665 14.1667C16.6665 14.3877 16.5787 14.5997 16.4224 14.756C16.2661 14.9122 16.0542 15 15.8332 15H4.1665C3.94549 15 3.73353 14.9122 3.57725 14.756C3.42097 14.5997 3.33317 14.3877 3.33317 14.1667V6.17504L8.23317 11.075C8.70192 11.5432 9.33734 11.8062 9.99984 11.8062C10.6623 11.8062 11.2978 11.5432 11.7665 11.075L16.6665 6.17504V14.1667Z" fill="#FFA703"/>
								</svg>
								<span>Email</span>
							</p>
							<p><a href="mailto:<?php the_field('email', 'option'); ?>">biuro@apres-tehnology.pl</a></p>
						</div>
						<div class="contacts__list_item">
							<p class="contacts__list_subtitle">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M17.8415 7.19994C17.8415 7.19994 17.8415 7.19994 17.8415 7.15828C17.2543 5.55513 16.1889 4.17101 14.7894 3.19316C13.3899 2.21531 11.7238 1.69092 10.0165 1.69092C8.30921 1.69092 6.64312 2.21531 5.2436 3.19316C3.84408 4.17101 2.77867 5.55513 2.1915 7.15828C2.1915 7.15828 2.1915 7.15828 2.1915 7.19994C1.53577 9.00902 1.53577 10.9909 2.1915 12.7999C2.1915 12.7999 2.1915 12.7999 2.1915 12.8416C2.77867 14.4448 3.84408 15.8289 5.2436 16.8067C6.64312 17.7846 8.30921 18.309 10.0165 18.309C11.7238 18.309 13.3899 17.7846 14.7894 16.8067C16.1889 15.8289 17.2543 14.4448 17.8415 12.8416C17.8415 12.8416 17.8415 12.8416 17.8415 12.7999C18.4972 10.9909 18.4972 9.00902 17.8415 7.19994ZM3.54984 11.6666C3.26086 10.5743 3.26086 9.4256 3.54984 8.33327H5.09984C4.96653 9.44039 4.96653 10.5595 5.09984 11.6666H3.54984ZM4.23317 13.3333H5.39984C5.59544 14.0765 5.87501 14.795 6.23317 15.4749C5.41592 14.9182 4.73275 14.1867 4.23317 13.3333ZM5.39984 6.66661H4.23317C4.72556 5.81585 5.4 5.0845 6.20817 4.52494C5.85863 5.20598 5.58746 5.92446 5.39984 6.66661ZM9.1665 16.4166C8.14297 15.6655 7.42413 14.571 7.1415 13.3333H9.1665V16.4166ZM9.1665 11.6666H6.78317C6.62766 10.5609 6.62766 9.43894 6.78317 8.33327H9.1665V11.6666ZM9.1665 6.66661H7.1415C7.42413 5.42891 8.14297 4.33437 9.1665 3.58328V6.66661ZM15.7665 6.66661H14.5998C14.4042 5.92341 14.1247 5.20489 13.7665 4.52494C14.5838 5.08167 15.2669 5.81323 15.7665 6.66661ZM10.8332 3.58328C11.8567 4.33437 12.5755 5.42891 12.8582 6.66661H10.8332V3.58328ZM10.8332 16.4166V13.3333H12.8582C12.5755 14.571 11.8567 15.6655 10.8332 16.4166ZM13.2165 11.6666H10.8332V8.33327H13.2165C13.372 9.43894 13.372 10.5609 13.2165 11.6666ZM13.7915 15.4749C14.1497 14.795 14.4292 14.0765 14.6248 13.3333H15.7915C15.2919 14.1867 14.6088 14.9182 13.7915 15.4749ZM16.4498 11.6666H14.8998C14.9676 11.1137 15.001 10.557 14.9998 9.99994C15.0008 9.44286 14.9674 8.88625 14.8998 8.33327H16.4498C16.7388 9.4256 16.7388 10.5743 16.4498 11.6666Z" fill="#FFA703"/>
								</svg>
								<span>Social Media</span>
							</p>
							<div class="contacts__list_soc">
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
					</div>
				</div>

				<div class="contacts__col">
					<h2 class="contacts__title h2">Formularz kontaktowy</h2>
					<form action="#" class="contacts__form form">
						<div class="contacts__form_line">
							<div class="contacts__form_item form__item">
								<label for="contactsName">Imię i Nazwisko</label>
								<input id="contactsName" type="text" name="name" class="form__input _req">
							</div>
							<div class="contacts__form_item form__item">
								<label for="contactsIndex">Kod pocztowy</label>
								<input id="contactsIndex" type="text" name="index" class="form__input _req">
							</div>
						</div>
						<div class="contacts__form_line">
							<div class="contacts__form_item form__item">
								<label for="contactsTel">Telefon</label>
								<input id="contactsTel" type="phone" name="phone" class="form__input _req">
							</div>
							<div class="contacts__form_item form__item">
								<label for="contactsEmail">Email</label>
								<input id="contactsEmail" type="email" name="email" class="form__input _req">
							</div>
						</div>
						<div class="form__item">
							<div class="form__checkbox">
								<input id="formAgreement11" checked type="checkbox" name="agreement" class="form__checkbox_input _req">
								<label for="formAgreement11" class="form__checkbox_label">
									<span>
										Potwierdzam, że zapoznałem (-am) się z 
										<a href="<?php echo get_home_url(); ?>/cookies" target="_blank">
											Klauzulą informacyjną dotyczącą przetwarzania danych
										</a>
										osobowych przez APRES Technology Damian Pilarski i wyrażam zgodę na kontakt w celu 
										przedstawienia oferty.
									</span>
								</label>
							</div>
						</div>
						<div class="contacts__form_btn">
							<button class="btn">Wyślij</button>
						</div>
					</form>
				</div>

			</div>

			<div class="contacts__map">
				<?php the_field('map', 'option'); ?>
			</div>
		</div>
	</section>

</main>

<?php
	get_footer();
