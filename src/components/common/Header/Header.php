<?php
/*
 * Author:  Fedor Nikonov (fritylo)
 * Date:    2023-01-09, 8:27:01 PM
 * Company: frity.org
 */
?>

<?php
function _Header (
	$attributes = []
) { ?>
	<?php 
		attributes_extract($attributes, 'class', $class);
		attributes($attributes);

		$logo = select_setting('logo');
		$header = select_setting('header');
	?>

	<header class="header fix top0 left0 w100 <?= $class ?>" <?= $attributes ?>>
		<?php Devicer::Start() ?>
			<div class="header__wrapper row aic mA">
				<div class="header__logo">
					<a href="./shop" class="cup">
						<img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>" />
					</a>
				</div>
            	<div class="header__menu-wrapper col tar">
					<span class="header__slogan header__slogan_pc ff-ars-i fwn">
						<?= $header['slogan_first'] ?>
						<?php _Link($header['slogan_second'], '#') ?>
					</span>

					<?php HeaderMenu([
						'Главная' => site_url('/'),
						'Обо мне' => site_url('/info/about-me'),
						'О проекте' => site_url('/info/about-project'),
						'Консультации психолога' => site_url('/consult'),
						'Мероприятия' => site_url('/events'),
						'Нумерология' => site_url('/numerology'),
						'Магазин шпаргалок' => site_url('/shop'), 
						'Блог' => site_url('/blog'),
						'Контакты' => site_url('/#contacts'),
					]) ?>
				</div>
			</div>
		
			<div class="header__slogan_mobile row jcsb aic">
				<div class="header__mobile-line"></div>
				<span class="header__slogan ff-ars-i fwn">
					<?= $header['slogan_first'] ?>
					<?php _Link($header['slogan_second'], '#') ?>
				</span>
			</div>
		<?php Devicer::End() ?>
	</header>
<?php } ?>
