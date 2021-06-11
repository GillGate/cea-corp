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
				<a href="/partners" class="header__link">Zaměstnavatele</a>
				<a class="header__link header__link--active">Kontakty</a>
			</nav>
			<div class="header__phone">
				<a href="tel:+420775265842" class="header__link header__link--phone">+420 775 265 842</a>
				<a href="tel:+420222103129" class="header__link header__link--fax">+420 222 103 129 </a>
			</div>
		</div>
	</header>
	<section class="contactsIntro">
		<div class="container">
			<div class="contactsIntro__wrapper">
				<div class="contactsIntro__head">
					<h1 class="title title--big contactsIntro__title">Kontakty</h1>
					<p class="caption">Jsme tu pro Vás!</p>
				</div>
				<div class="contactsIntro__map">
					<img src="<?php echo IMG_DIR ?>/map.jpg" width="100%" height="590" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="contactsInfo">
		<div class="container">
			<div class="contactsInfo__wrapper">
				<h2 class="title title--medium contactsInfo__title">Kontakujte nas</h2>
				<ul class="contactsInfo__list">
					<li class="contactsInfo__item contactsInfo__item--first">
						<h3 class="contactsInfo__listTitle">Česko Evropská Agentura s.r.o.</h3>
						<div class="contactsInfo__content">
							<address>
								Politických vězňů 1272/21 <br>
								110 00 Nové Město <br>
								Praha 1 (Česká Republika)
							</address>
						</div>
					</li>
					<li class="contactsInfo__item">
						<h3 class="contactsInfo__listTitle">Telefon</h3>
						<div class="contactsInfo__content">
							<a href="tel:+420222103129">+420 222 103 129</a>
							<a href="tel:+420773339730">+420 773 339 730 (fax)</a>
						</div>
					</li>
					<li class="contactsInfo__item">
						<h3 class="contactsInfo__listTitle">Email</h3>
						<div class="contactsInfo__content">
							<a href="mailto:info@ceskoevropska.cz">info@ceskoevropska.cz</a>
						</div>
					</li>
					<li class="contactsInfo__item">
						<h3 class="contactsInfo__listTitle">Oteviraci doba</h3>
						<div class="contactsInfo__content">
							<p>Mon - Fri. 10:00 - 19:00</p>
						</div>
					</li>
					<li class="contactsInfo__item">
						<h3 class="contactsInfo__listTitle">Identifikační údaje</h3>
						<div class="contactsInfo__content">
							<p>IČ: 052 26 511</p>
							<p>DIČ: CZ05226511</p>
						</div>
					</li>
					<li class="contactsInfo__item">
						<h3 class="contactsInfo__listTitle">Bankovní účty určené ke zveřejnění</h3>
						<div class="contactsInfo__content">
							<p>275570256/0300</p>
							<p>5337020309/0800</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="orderCall orderCall--contacts">
		<div class="container">
			<div class="orderCall__wrapper">
				<h2 class="title title--medium orderCall__title">Vyplňte formulář a my <br> Vás co možná nejdříve kontaktujeme</h2>
				<div class="orderCall__formWrapper">
					<form class="form form--white orderCall__form">
						<div class="form__body">
							<label class="form__label">
								<input type="text" class="form__input" name="name" placeholder="Jméno a příjmení*">
							</label>
							<label class="form__label">
								<input type="email" class="form__input" name="email" placeholder="E-mail*">
							</label>
							<label class="form__label">
								<input type="text" class="form__input" name="message" placeholder="Zpráva*">
							</label>
						</div>
						<div class="form__foot">
							<div class="form__agree">
								<input type="checkbox" name="agree" id="form_agree" class="vh">
								<label for="form_agree" class="form__agreeLabel">
									Souhlasím se <a href="#">zpracováním osobních údajů</a><span>*</span>
								</label>
							</div>
							<button class="link--arrow form__btn">Odeslat žádost</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>