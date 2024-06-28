<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Youtalk</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/css.css?t=<?php echo time(); ?>">
	<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
    	const hamburger = document.getElementById('hamburger');
    	const menu = document.getElementById('menu');

      hamburger.addEventListener('click', () => {
        menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
        hamburger.classList.toggle('active');
      });
    });
	</script>
</head>
<body>

	<header>

		<div class="header_left">

			<img class="header_left-logo" src="img/header_logo.svg">

			<nav class="header_left-menu_items">
				<a class="menu_item" href="">О нас</a>
				<a class="menu_item" href="">Тарифы</a>
				<a class="menu_item" href="">Для бизнеса</a>
				<a class="menu_item" href="">Психологам</a>
				<a class="menu_item" href="">Сертификат</a>
				<div class="menu_item">
				  <a class="menu_item-a" href="#">Материалы</a>
				  <ul class="submenu-wrapper">
				    <div class="submenu-div"><a class="submenu-a" href="#">Материал 1</a></div>
				    <div class="menu-divider"></div>
				    <div class="submenu-div"><a class="submenu-a" href="#">Материал 2</a></div>
				    <div class="menu-divider"></div>
				    <div class="submenu-div"><a class="submenu-a" href="#">Материал 3</a></div>
				  </ul>
				</div>
				<a class="menu_item" href="">FAQ</a>
		</div>

		<div class="header_right">
			<button class="header_right-callback">Подобрать психолога</button>
		</div>
		
		<div class="header_right-hamburger_wrapper" id="hamburger">
			<div class="hamburger-dash" id="dash1"></div>
			<div class="hamburger-dash" id="dash2"></div>
			<div class="hamburger-dash" id="dash3"></div>
		</div>

		<nav class="menu" id="menu">
	    <ul class="menu-list">
        <li class="menu-item"><a class="menu-link" href="#">О нас</a></li>
				    <div class="menu-divider"></div>
        <li class="menu-item"><a class="menu-link" href="#">Тарифы</a></li>
				    <div class="menu-divider"></div>
        <li class="menu-item"><a class="menu-link" href="#">Для бизнеса</a></li>
				    <div class="menu-divider"></div>
        <li class="menu-item"><a class="menu-link" href="#">Психологам</a></li>
				    <div class="menu-divider"></div>
        <li class="menu-item"><a class="menu-link" href="#">Сертификат</a></li>
				    <div class="menu-divider"></div>
        <li class="menu-item"><a class="menu-link" href="#">Материалы</a></li>
				    <div class="menu-divider"></div>
        <li class="menu-item"><a class="menu-link" href="#">FAQ</a></li>
	    </ul>
		</nav>
	</header>

	<main>
		<div class="content_route">
			<div class="route_cation">Главная</div>
			<img class="route_arrow" src="img/route_arrow.svg">
			<div class="route_cation">Блог</div>
			<img class="route_arrow" src="img/route_arrow.svg">
			<div class="route_cation">Как не утонуть в тревоге и управлять своими страхами</div>
		</div>

		<div class="content-main_wrapper">
			<div class="main_wrapper-left_wrapper">
				<div class="content_title">Как не утонуть в тревоге и управлять своими страхами</div>
				<div class="content-creator">Автор: Лиза Файнтух · 21.08.2021<span class="content-tags-creator"> · Self</span></div>
				<img class="content-big_image" src="img/blog_content_1.png">

				<div class="content-bulleted_list_wrapper">
					<div class="bulleted_list-title">Содержание</div>
					<ul class="bulleted_list-list underline">
						<li class="list-item">Как понять, что отношения с мамой были дисфункциональными и привели к травме?</li>
						<li class="list-item">Мама привет!
							<ul class="bulleted_list-list underline">Под под заголовок под заголовком
								<ul class="bulleted_list-list underline">Под под под заголовок под заголовком
									<ul class="bulleted_list-list underline">
										Под под под под заголовок под заголовком
									</ul>
								</ul>
							</ul>
						</li>
						<li class="list-item">Ну вот опять заголовок который как «привет мама»</li>
						<li class="list-item">Как понять, что вы страдаете от материнской травмы?</li>
					</ul>
				</div>

				<h3 class="content-title">Заголовок h3</h3>

				<div class="content-caption_wrapper">
					<p class="caption_wrapper-caption">Один из самых важных навыков, которые может дать работа с психотерапевтом - умение в разных ситуациях по-разному обходиться со своими эмоциями.  Снять этот процесс с автопилота и перевести его в поле сознания.</p>
					<p class="caption_wrapper-caption">Давайте, к примеру, разберем тревогу. Можно разложить перед собой целую коллекцию доступных реакций и выбрать нужную:</p>
				</div>

				<div class="content-note_wrapper">
					<img class="note-image" src="img/blog_content_double_quotes.svg">
					<p class="note-caption">Мы знаем, что нуждаться в помощи и поддержке в трудные периоды жизни абсолютно нормально для любого человека, и стремимся сделать психотерапию безопасной, удобной и доступной каждому</p>
					<p class="note-creator">Ана Крымская</p>
				</div>

				<h3 class="content-title">Что еще можно делать с тревогой?</h3>

				<div>
					<ul class="bulleted_list-list">
						<li class="list-item">Управлять ей через что-то внешнее: включать музыку, которая создает другое настроение, сесть за работу с цифрами, которая быстренько активизирует другие участки мозга, читать блоги, которые вас успокаивают и отвлекают.</li>
						<li class="list-item">А еще порой можно разрешить себе тревогу заесть чем-то вкусным. Это, конечно, не самая здоровая стратегия, но в ряде ситуаций можно считать ее вполне рабочей. Особенно, когда внутренний ресурс на нуле, а поддерживающее окружение не в доступе.</li>
					</ul>
				</div>

				<img class="content-big_image" src="img/blog_content_2.png">

				<div class="content-description">Онтогенез речи отражает групповой эриксоновский гипноз.</div>

				<div class="content-caption_wrapper">
					<p class="caption_wrapper-caption">Чем шире доступный вам репертуар реакций и чем более осознанно вы можете выбирать из него то, что лучше всего подойдет в каждой конкретной ситуации, тем больше будет ваша устойчивость к стрессу, депрессии, неопределенности, да и к жизни в целом.</p>
				</div>

				<div class="content-note_type_two">
					<p class="note_type_two-caption">Мы знаем, что нуждаться в помощи и поддержке в трудные периоды жизни абсолютно нормально для любого человека, и стремимся сделать психотерапию безопасной, удобной и доступной каждому</p>
					<img class="note_type_two-background_image" src="img/blog_bg_circle_1.svg">
				</div>

				<div class="content-caption_wrapper">
					<p class="caption_wrapper-caption">Одна из ключевых задач психотерапии как раз и заключается в том, чтобы этот репертуар расширять и обучать человека пользоваться доступными ему реакциями в той последовательности, пропорции и объеме, которые подходят именно ему. Без оглядки на то, "как правильно" или "как у других".</p>
				</div>

				<div class="content-photo_plus_cation_wrapper">
					<img class="photo_plus_cation_wrapper-photo" src="img/blog_content_3.png">
					<div class="photo_plus_cation_wrapper-caption_wrapper">
						<p class="caption_wrapper-caption">Чем шире доступный вам репертуар реакций и чем более осознанно вы можете выбирать из него то, что лучше всего подойдет в каждой конкретной ситуации, тем больше будет ваша устойчивость к стрессу, депрессии, неопределенности, да и к жизни в целом.</p>
						<p class="caption_wrapper-caption">А еще порой можно разрешить себе тревогу заесть чем-то вкусным. </p>
					</div>
				</div>

				<div class="content-caption_wrapper">
					<p class="caption_wrapper-caption">Чем шире доступный вам репертуар реакций и чем более осознанно вы можете выбирать из него то, что лучше всего подойдет в каждой конкретной ситуации, тем больше будет ваша устойчивость к стрессу, депрессии, неопределенности, да и к жизни в целом.</p>
				</div>

				<div class="content-practice_wrapper practice-gereen">
					<div class="practice_wrapper-title">Упражнение #1</div>
					<div class="content-caption_wrapper">
						<p class="caption_wrapper-caption">Нужно последовательно напрягать и расслаблять каждую мышцу в теле на несколько секунд. Напрягать стоит довольно сильно, чтобы потом отчетливее ощущать расслабляющий эффект. Начать можно с пальцев ног и постепенно подниматься вверх. Смысл в том, чтобы через напряжение дать стрессу выход, а затем вновь привести себя в спокойное состояние через расслабление</p>
					</div>
				</div>

				<h3 class="content-title">Что еще можно делать с тревогой?</h3>

				<div>
					<ul class="bulleted_list-list">
						<li class="list-item">Управлять ей через что-то внешнее: включать музыку, которая создает другое настроение, сесть за работу с цифрами, которая быстренько активизирует другие участки мозга, читать блоги, которые вас успокаивают и отвлекают.</li>
						<li class="list-item">А еще порой можно разрешить себе тревогу заесть чем-то вкусным. Это, конечно, не самая здоровая стратегия, но в ряде ситуаций можно считать ее вполне рабочей. Особенно, когда внутренний ресурс на нуле, а поддерживающее окружение не в доступе.</li>
					</ul>
				</div>

				<div class="content-photo_plus_cation_wrapper">
					<img class="photo_plus_cation_wrapper-photo" src="img/blog_content_4.png">
					<div class="photo_plus_cation_wrapper-caption_wrapper">
						<p class="caption_wrapper-caption">Чем шире доступный вам репертуар реакций и чем более осознанно вы можете выбирать из него то, что лучше всего подойдет в каждой конкретной ситуации, тем больше будет ваша устойчивость к стрессу.</p>
					</div>
				</div>

				<div class="content-caption_wrapper">
					<p class="caption_wrapper-caption">Чем шире доступный вам репертуар реакций и чем более осознанно вы можете выбирать из него то, что лучше всего подойдет в каждой конкретной ситуации, тем больше будет ваша устойчивость к стрессу, депрессии, неопределенности, да и к жизни в целом.</p>
				</div>

				<div class="content-practice_wrapper practice-orange">
					<div class="practice_wrapper-title">Упражнение #2</div>
					<div class="content-caption_wrapper">
						<p class="caption_wrapper-caption">Нужно последовательно напрягать и расслаблять каждую мышцу в теле на несколько секунд. Напрягать стоит довольно сильно, чтобы потом отчетливее ощущать расслабляющий эффект. Начать можно с пальцев ног и постепенно подниматься вверх. Смысл в том, чтобы через напряжение дать стрессу выход, а затем вновь привести себя в спокойное состояние через расслабление</p>
					</div>
				</div>

				<div class="content-double_photo_plus_cation_wrapper">
					<div class="double_photo_plus_cation_wrapper-content_wrapper">
						<img class="content_wrapper-image" src="img/blog_content_5.png">
						<div class="content-caption_wrapper double_photo_plus_cation_wrapper-caption">Чем шире доступный вам репертуар реакций и чем более осознанно вы можете выбирать из него то, что лучше всего подойдет в каждой конкретной ситуации, тем больше будет ваша устойчивость к стрессу, депрессии, неопределенности, да и к жизни в целом.</div>
					</div>
					<div class="double_photo_plus_cation_wrapper-content_wrapper">
						<img class="content_wrapper-image" src="img/blog_content_6.png">
						<div class="content-caption_wrapper double_photo_plus_cation_wrapper-caption">Чем шире доступный вам репертуар реакций и чем более осознанно вы можете выбирать из него то, что лучше всего подойдет в каждой конкретной ситуации, тем больше будет ваша устойчивость к стрессу, депрессии, неопределенности, да и к жизни в целом.</div>
					</div>
				</div>

				<div class="content-divider_wrapper">
					<img class="divider_wrapper-divider" src="img/blog_divider.svg">
				</div>

				<div class="content-caption_wrapper">
					<p class="caption_wrapper-caption">Одна из ключевых задач психотерапии как раз и заключается в том, чтобы этот репертуар расширять и обучать человека пользоваться доступными ему реакциями в той последовательности, пропорции и объеме, которые подходят именно ему. Без оглядки на то, "как правильно" или "как у других".</p>
				</div>


				<div class="content-practice_wrapper practice-gereen">
					<div class="practice_wrapper-title">Упражнение #1</div>
					<div class="content-caption_wrapper">
						<p class="caption_wrapper-caption">Нужно последовательно напрягать и расслаблять каждую мышцу в теле на несколько секунд. Напрягать стоит довольно сильно, чтобы потом отчетливее ощущать расслабляющий эффект. Начать можно с пальцев ног и постепенно подниматься вверх. Смысл в том, чтобы через напряжение дать стрессу выход, а затем вновь привести себя в спокойное состояние через расслабление</p>
					</div>
				</div>

				<div class="content-tags">Self · Самооценка и самопринятие · Самооценка и самопринятие · Упражнения · Чувства и эмоции · Самооценка и самопринятие · Тревога</div>

			</div>




			<div class="main_wrapper-right_wrapper">
				<div class="content_right-default_wrapper default_wrapper_blue">
					<img src="img/blog_content_people_2.svg">
					<div class="content_right-title">Загружаем свободные окошки</div>
					<div class="content_right-caption">Все в порядке, сейчас мы перенаправим вас в сервис записи Qlick, через который удобно выбрать дату,  время встречи и оплатить её</div>
					<button class="content_right-button">Подробнее</button>
				</div>

				<div class="content_right-default_wrapper default_wrapper_white default_wrapper_border">
					<div class="profile_wrapper-tags_wrapper">
						<div class="tag_wrapper-items_wrapper">
							<img class="items_wrapper-item_emoji" src="">
							<div class="items_wrapper-item_caption">📝 Переписка</div>
						</div>
						<div class="tag_wrapper-items_wrapper">
							<img class="items_wrapper-item_emoji" src="">
							<div class="items_wrapper-item_caption">📹 Видео</div>
						</div>
					</div>
					<div class="content_right-profile_wrapper">
						<div class="profile_wrapper-avatar_wrapper">
							<img class="avatar_wrapper-photo" src="img/blog_avatar.png">
						</div>
						<div class="profile_wrapper-first_name">Лилия</div>
						<div class="profile_wrapper-post">Психолог</div>
						<div class="profile_wrapper-work_experience">Опыт 6 лет · 43 года</div>
					</div>

					<div class="content_right-divider"></div>

					<div class="content_right-information_wrapper">
						<div class="information_wrapper-title">С чем работает психолог</div>
						<ul class="information_wrapper-bulleted_list_wrapper">
							<li class="bulleted_list_wrapper-information">Тревога, тревожности</li>
							<li class="bulleted_list_wrapper-information">Подавленность</li>
							<li class="bulleted_list_wrapper-information">Тревога и панические атаки</li>
						</ul>
					</div>
					<button class="content_right-button">Подробнее</button>
				</div>

				<div class="content_right-default_wrapper default_wrapper_darkblue">
					<div class="content_right-gift_title">Дарите заботу</div>
					<img class="content_right-gift_image content_right-caring_1" src="img/gift_1.png">
					<img class="content_right-gift_image content_right-caring_2" src="img/gift_2.png">
					<img class="content_right-gift_image content_right-caring_3" src="img/gift_3.png">
				</div>
				
				<div class="content_right-default_wrapper default_wrapper_white default_wrapper_border">
					<div class="content_right-title_wrapper">
						<span class="title_wrapper-title_number">8</span>
						<span class="title_wrapper-title_caption">Видео сессий</span>
					</div>
					<div class="content_right-gift_caption">Проработать небольшие проблемы и продвинуться в решении сложных запросов</div>
					<div class="content_right-gfit_price">18 500 ₽</div>
					<button class="content_right-button small_button">Купить</button>
					<img class="content_right-gift_image" src="img/blog_gift_red.png">
					<img class="content_right-gift_image" src="img/blog_gift_blue.png">
				</div>
			</div>
		</div>

		<div class="content-divider"></div>

		<div class="content-help_wrapper">
			<div class="help_wrapper-wrapper">
				<div class="help_wrapper-title">Откликается проблема?</div>
				<div class="help_wrapper-caption">Поможем подобрать специалиста по работе с подобным запросом</div>
				<button class="content_right-button content_right-button_get_psycholog">Подобрать психолога</button>
			</div>
			<img src="img/blog_content_people_1.svg">
		</div>

	</main>

	<footer>

		<div class="footer_content_wrapper-menu">
			<div class="footer_content_wrapper-menu_elements_wrapper">
				<div class="menu_elements_wrapper-column">
					<div class="element-item">
						<a href="" class="element_item-a">О нас</a>
					</div>
					<div class="element-item">
						<a href="" class="element_item-a">Тарифы</a>
					</div>
					<div class="element-item">
						<a href="" class="element_item-a">Для бизнеса</a>
					</div>
					<div class="element-item">
						<a href="" class="element_item-a">Психологам</a>
					</div>
					<div class="element-item">
						<a href="" class="element_item-a">FAQ</a>
					</div>
				</div>	
				<div class="menu_elements_wrapper-column">
					<div class="element-item">
						<a href="" class="element_item-a">Блог</a>
					</div>
					<div class="element-item">
						<a href="" class="element_item-a">Вебинары</a>
					</div>
					<div class="element-item">
						<a href="" class="element_item-a">Подскаст</a>
					</div>
					<div class="element-item">
						<a href="" class="element_item-a">Сертификат</a>
					</div>
					<div class="element-item">
						<a href="" class="element_item-a">Контакты</a>
					</div>
				</div>	
			</div>

			<div class="footer_content_wrapper-mail_wrapper">
				<div class="mail-title">Одно письмо в неделю со свежими новостями и акциями</div>
				<div class="mail-input_wrapper">
					<input type="text" name="email" class="mail-input" placeholder="Ваш e-mail">
					<button class="mail-send_button">
						<img class="contact-item" src="img/footer_icon_send.svg">
					</button>
				</div>
				<div class="mail-description">Подписываясь, я соглашаюсь на обработку персональных данных в соответствии с ФЗ РФ № 152-ФЗ «О персональных данных», а также с Политикой конфиденциальности</div>
			</div>

			<div class="footer_content_wrapper-contacts">
				<div class="footer-sk">
					<img class="sk-wrapper" src="img/footer_logo_sk.svg">
					<div class="sk-caption">Участник</div>
				</div>
				<div class="contacts-wrapper">
					<a class="contact-wrapper" href="#">
						<img class="contact-item" src="img/footer_icon_vk.svg">
					</a>
					<a class="contact-wrapper" href="#">
						<img class="contact-item" src="img/footer_icon_tg.svg">
					</a>
					<a class="contact-wrapper" href="#">
						<img class="contact-item" src="img/footer_icon_twitter.svg">
					</a>
					<a class="contact-wrapper" href="#">
						<img class="contact-item" src="img/footer_icon_dzen.svg">
					</a>
				</div>
			</div>
		</div>

		<div class="footer-divider"></div>

		<div class="footer-copyrights">
			<div class="copyright-item">©Youtalk, 2018 – 2022</div>
			<div class="copyright-item">Юридические документы</div>
			<div class="copyright-item">Способы оплаты</div>
		</div>
		
	</footer>

</body>
</html>