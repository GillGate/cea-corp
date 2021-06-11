<?php get_header(); ?>
<body>
	<header class="header">
		<div class="container">
			<div class="header__logo">
				<img src="<?php echo IMG_DIR ?>/logo.svg" height="60" alt="">
			</div>
			<nav class="header__nav">
				<a href="/" class="header__link">Domů</a>
				<a href="/about" class="header__link">O nás</a>
				<a href="/employees" class="header__link">Zaměstnanci</a>
				<a class="header__link header__link--active">Zaměstnavatele</a>
				<a href="/contacts" class="header__link">Kontakty</a>
			</nav>
			<div class="header__phone">
				<a href="tel:+420775265842" class="header__link header__link--phone">+420 775 265 842</a>
				<a href="tel:+420222103129" class="header__link header__link--fax">+420 222 103 129 </a>
			</div>
		</div>
	</header>
	<section class="partnersIntro">
		<div class="container">
			<div class="partnersIntro__wrapper">
				<h1 class="title title--big partnersIntro__title">Vážíme si spolupráce <br>s každým z našich partnerů</h1>
				<div class="partnersIntro__content">
					<p class="caption partnersIntro__caption">CEA má rozsáhlou síť a využívá efektivní metody náboru. To nám umožňuje optimální propojení kvalifikovaných pracovníků s vhodnými zaměstnavateli. Vyvinuli jsme vlastní metody analýzy a školení našich zaměstnanců, což nám.</p>
					<p class="caption partnersIntro__caption">Pomáhá zlepšit kvalitu poskytovaných služeb. Proto jsme v tak krátké době zahájili spolupráci s více než 60 úspěšnými dlouhodobými partnery v České republice i v dalších státech Evropské Unie.</p>
					<div class="partnersIntro__img">
						<img src="<?php echo IMG_DIR ?>/partners-intro.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="partnersList">
		<div class="container">
			<?php get_template_part( 'include/partners' ); ?>
		</div>
	</section>
	<?php get_template_part( 'include/reviews' ); ?>
	<?php get_template_part( 'include/letters' ); ?>
	<section class="cooperation cooperation--partner">
		<div class="container">
			<h2 class="title--medium cooperation__title">Máte zájem o spolupráci? Dejte nám vědět</h2>
			<div class="cooperation__formWrapper">
				<h3 class="title--medium cooperation__formTitle">Možnosti spolupráce. <br> Staňte se naším partnerem!</h3>
				<form class="form cooperation__form">
					<div class="form__body">
						<label class="form__label">
							<input type="text" class="form__input" name="name" placeholder="Jméno a příjmení*">
						</label>
						<label class="form__label">
							<input type="text" class="form__input" name="company" placeholder="Firma*">
						</label>
						<label class="form__label">
							<input type="email" class="form__input" name="email" placeholder="E-mail*">
						</label>
						<label class="form__label">
							<input type="phone" class="form__input" name="phone" placeholder="Telefon*">
						</label>
						<label class="form__label">
							<input type="text" class="form__input" name="comment" placeholder="Komentář">
						</label>
					</div>
					<div class="form__foot">
						<div class="form__agree">
							<input type="checkbox" name="agree" id="form_agree" class="vh">
							<label for="form_agree" class="form__agreeLabel">
								Souhlasím se <a href="#">zpracováním osobních údajů</a><span>*</span>
							</label>
						</div>
						<button class="link--arrow link--arrowWhite form__btn">Odeslat žádost</button>
					</div>
				</form>
			</div>
		</div>
	</section>
<?php get_footer(); ?>