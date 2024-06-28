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

    function handleBlogClick(button) {
    	const linked_blog = button.attributes.linked_blog.value;
    	window.open(linked_blog, '_self');
    };
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
		</div>
		<div class="content_title">Блог</div>

		<div style="display: flex; flex-direction: column; align-items: center;">
			<div class="content_wrapper-tags">

				<input type="checkbox" id="tag_checkbox_1" class="tag_checkbox">
				<label class="tag_item" for="tag_checkbox_1">
					<img class="tag_emoji" src="img/smile_emoji.png">
					<div class="tag_caption">Все</div>
				</label>

				<input type="checkbox" id="tag_checkbox_2" class="tag_checkbox">
				<label class="tag_item" for="tag_checkbox_2">
					<div class="tag_caption">Самооценка и самопринятие</div>
				</label>

				<input type="checkbox" id="tag_checkbox_3" class="tag_checkbox" checked>
				<label class="tag_item" for="tag_checkbox_3">
					<img class="tag_emoji" src="img/unicorn_emoji.png">
					<div class="tag_caption">Self</div>
				</label>

				<input type="checkbox" id="tag_checkbox_4" class="tag_checkbox">
				<label class="tag_item" for="tag_checkbox_4">
					<div class="tag_caption">Чувства и эмоции</div>
				</label>

				<input type="checkbox" id="tag_checkbox_5" class="tag_checkbox">
				<label class="tag_item" for="tag_checkbox_5">
					<div class="tag_caption">Тревога</div>
				</label>

				<input type="checkbox" id="tag_checkbox_6" class="tag_checkbox">
				<label class="tag_item" for="tag_checkbox_6">
					<div class="tag_caption">Упражнения</div>
				</label>

				<input type="checkbox" id="tag_checkbox_7" class="tag_checkbox">
				<label class="tag_item" for="tag_checkbox_7">
					<div class="tag_caption">Психология питания</div>
				</label>

				<input type="checkbox" id="tag_checkbox_8" class="tag_checkbox">
				<label class="tag_item" for="tag_checkbox_8">
					<div class="tag_caption">Насилие</div>
				</label>

				<input type="checkbox" id="tag_checkbox_9" class="tag_checkbox">
				<label class="tag_item" for="tag_checkbox_9">
					<div class="tag_caption">Личное здоровье</div>
				</label>
			</div>
			
			<div class="content_wrapper-blogs">
				<div class="blogs-wrapper">
					<div class="blog-item" onclick="handleBlogClick(this)" linked_blog="blog_page.php">
						<div class="item-image_wrapper">
							<div class="item-image" style="background-image: url(img/blog_1.png);">
								<div class="tags-wrapper">
									<div class="tag_item">
										<img class="tag_emoji" src="img/unicorn_emoji.png">
										<div class="tag_caption">Самооценка и самопринятие</div>
									</div>
									<div class="tag_item">
										<img class="tag_emoji" src="img/unicorn_emoji.png">
										<div class="tag_caption">Self</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-description">
							<div class="item-description_top">
								<div class="description-title">Эмоциональное выгорание – стадии и симптомы, методы восстановления и профилактики</div>
								<div class="description-creator">Автор: Лиза Файнтух</div>
								<div class="description-caption">Изначально термин «эмоциональное профессиональной сфере и относился...</div>
							</div>
							<div class="item-description_bottom">
								<div class="description-date">21.08.2021</div>
							</div>
						</div>
					</div>



					<div class="blog-item" onclick="handleBlogClick(this)" linked_blog="blog_page.php">
						<div class="item-image_wrapper">
							<div class="item-image" style="background-image: url(img/blog_2.png);">
								<div class="tags-wrapper">
									<div class="tag_item">
										<img class="tag_emoji" src="img/unicorn_emoji.png">
										<div class="tag_caption">Self</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-description">
							<div class="item-description_top">
								<div class="description-title">Как не утонуть в тревоге и управлять своими страхами</div>
								<div class="description-creator">Автор: Екатерина Бельтюкова</div>
								<div class="description-caption">Один из самых важных навыков, которые может дать работа с психотерапевтом - умение в разных ситуациях по-разному обходиться ...</div>
							</div>
							<div class="item-description_bottom">
								<div class="description-date">11.08.2021</div>
							</div>
						</div>
					</div>
				</div>

				<div class="blogs-wrapper">
					<div class="blog-item_small" onclick="handleBlogClick(this)" linked_blog="blog_page.php">
						<div class="item-image_wrapper_small">
							<div class="item-image_small" style="background-image: url(img/blog_3.png);">
								<div class="tags-wrapper">
									<div class="tag_item">
										<img class="tag_emoji" src="img/unicorn_emoji.png">
										<div class="tag_caption">Самооценка и самопринятие</div>
									</div>
									<div class="tag_item">
										<img class="tag_emoji" src="img/unicorn_emoji.png">
										<div class="tag_caption">Психология питания</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-description">
							<div class="item-description_top">
								<div class="description-title">Эмоциональное выгорание – стадии и симптомы, методы восстановления и профилактики</div>
								<div class="description-creator">Автор: Лиза Файнтух</div>
								<div class="description-caption">Изначально термин «эмоциональное профессиональной сфере и относился...</div>
							</div>
							<div class="item-description_bottom">
								<div class="description-date">21.08.2021</div>
							</div>
						</div>
					</div>

					<div class="blog-item_small" onclick="handleBlogClick(this)" linked_blog="blog_page.php">
						<div class="item-image_wrapper_small">
							<div class="item-image_small" style="background-image: url(img/blog_4.png);">
								<div class="tags-wrapper">
									<div class="tag_item">
										<img class="tag_emoji" src="img/unicorn_emoji.png">
										<div class="tag_caption">Self</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-description">
							<div class="item-description_top">
								<div class="description-title">Как не утонуть в тревоге и управлять своими страхами</div>
								<div class="description-creator">Автор: Екатерина Бельтюкова</div>
								<div class="description-caption">Один из самых важных навыков, которые может дать работа с психотерапевтом - умение в разных ситуациях по-разному обходиться ...</div>
							</div>
							<div class="item-description_bottom">
								<div class="description-date">11.08.2021</div>
							</div>
						</div>
					</div>

					<div class="blog-item_small" onclick="handleBlogClick(this)" linked_blog="blog_page.php">
						<div class="item-image_wrapper_small">
							<div class="item-image_small" style="background-image: url(img/blog_5.png);">
								<div class="tags-wrapper">
									<div class="tag_item">
										<img class="tag_emoji" src="img/unicorn_emoji.png">
										<div class="tag_caption">Self</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-description">
							<div class="item-description_top">
								<div class="description-title">Как управлять своими эмоциями: 8 шагов</div>
								<div class="description-creator">Автор: Екатерина Бельтюкова</div>
								<div class="description-caption">Клиенты часто спрашивают, как КОНТРОЛИРОВАТЬ свои негативные эмоции. Пришло время об этом написать!</div>
							</div>
							<div class="item-description_bottom">
								<div class="description-date">07.08.2021</div>
							</div>
						</div>
					</div>
				
					<div class="blog-item_small" onclick="handleBlogClick(this)" linked_blog="blog_page.php">
						<div class="item-image_wrapper_small">
							<div class="item-image_small" style="background-image: url(img/blog_6.png);">
								<div class="tags-wrapper">
									<div class="tag_item">
										<img class="tag_emoji" src="img/unicorn_emoji.png">
										<div class="tag_caption">Self</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-description">
							<div class="item-description_top">
								<div class="description-title">Эмоциональное выгорание – стадии и симптомы, методы восстановления и профилактики</div>
								<div class="description-creator">Автор: Лиза Файнтух</div>
								<div class="description-caption">Изначально термин «эмоциональное профессиональной сфере и относился...</div>
							</div>
							<div class="item-description_bottom">
								<div class="description-date">21.08.2021</div>
							</div>
						</div>
					</div>

					<div class="blog-item_small" onclick="handleBlogClick(this)" linked_blog="blog_page.php">
						<div class="item-image_wrapper_small">
							<div class="item-image_small" style="background-image: url(img/blog_7.png);">
								<div class="tags-wrapper">
									<div class="tag_item">
										<img class="tag_emoji" src="img/unicorn_emoji.png">
										<div class="tag_caption">Self</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-description">
							<div class="item-description_top">
								<div class="description-title">Как не утонуть в тревоге и управлять своими страхами</div>
								<div class="description-creator">Автор: Екатерина Бельтюкова</div>
								<div class="description-caption">Один из самых важных навыков, которые может дать работа с психотерапевтом - умение в разных ситуациях по-разному обходиться ...</div>
							</div>
							<div class="item-description_bottom">
								<div class="description-date">11.08.2021</div>
							</div>
						</div>
					</div>

					<div class="blog-item_small" onclick="handleBlogClick(this)" linked_blog="blog_page.php">
						<div class="item-image_wrapper_small">
							<div class="item-image_small" style="background-image: url(img/blog_8.png);">
								<div class="tags-wrapper">
									<div class="tag_item">
										<img class="tag_emoji" src="img/unicorn_emoji.png">
										<div class="tag_caption">Self</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-description">
							<div class="item-description_top">
								<div class="description-title">Как управлять своими эмоциями: 8 шагов</div>
								<div class="description-creator">Автор: Екатерина Бельтюкова</div>
								<div class="description-caption">Клиенты часто спрашивают, как КОНТРОЛИРОВАТЬ свои негативные эмоции. Пришло время об этом написать!</div>
							</div>
							<div class="item-description_bottom">
								<div class="description-date">07.08.2021</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			
			<div class="content-more_blog_wrapper">
				<button class="content-more_blog_button">Ещё</button>
			</div>

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