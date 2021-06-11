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
				<a href="/contacts" class="header__link">Kontakty</a>
			</nav>
			<div class="header__phone">
				<a href="tel:+420775265842" class="header__link header__link--phone">+420 775 265 842</a>
				<a href="tel:+420222103129" class="header__link header__link--fax">+420 222 103 129 </a>
			</div>
		</div>
	</header>
	<section class="documents">
		<div class="container">
			<div class="documents__wrapper">
				<h1 class="title title--big documents__title">Dokumenty ke stážení</h1>
				<div class="documents__content">
					<p class="documents__caption">Všechny formuláře a další důležité dokumenty, které budete potřebovat.</p>
					<div class="documents__list">
						<div class="documents__listItem">
							<a href="#" class="documents__item documents__item--pdf">Výpis z Obchodního rejstříku</a>
						</div>
						<div class="documents__listItem">
							<h2 class="documents__listTitle">Česko Evropská Agentura, s.r.o. má rozhodnutím GŘ Úřadu práce ČR povolení bez omezení na veškeré profese</h2>
							<a href="#" class="documents__item documents__item--pdf">GŘ Úřad práce ČR §60 A, C</a>
							<a href="#" class="documents__item documents__item--pdf">GŘ Úřad práce ČR §60 B</a>
						</div>
						<div class="documents__listItem">
							<h2 class="documents__listTitle">Další dokumenty</h2>
							<a href="#" class="documents__item documents__item--pdf">Odpovědností pojištění</a>
							<a href="#" class="documents__item documents__item--pdf">Hospoářská komora</a>
							<a href="#" class="documents__item documents__item--pdf">Požární ochrana</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>