UPDATE {site} SET `theme`='site_start.php', [name]='Главная страница', [text]='<h2>О магазине</h2>
<p>О магазине, услугах и прочая подобная информация будет написана на этой странице. Можно написать любой объем текста, но желательно уложиться в несколько абзацев, ведь пользователи интернета ценят краткость и предметность. Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href="https://cloud.diafan.ru/">ссылки</a>&nbsp;на другие страницы.</p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите "Быстрое редактирование" на панели вверху страницы. Или "Администрирование", чтобы перейти на редактирование этой страницы в административной панели.</p>
<p><a href="map:lang_id=1;module_name=site;element_id=26;element_type=element;" class="btn btn_box">Подробнее</a></p>' WHERE id=1;
INSERT IGNORE INTO {site_blocks} (`id`) VALUES (1),(2),(3),(5),(6),(7),(8),(9),(10),(11);
UPDATE {site_blocks} SET [name]='Лого', [text]='<center><font size="5"><b>ВСЕ ДЛЯ КОМПЬЮТЕРА</b></font></center>', [act]='1', title_no_show='1' WHERE id=1;
UPDATE {site_blocks} SET [name]='Телефон в шапке', [text]='+7 8352 12-11-22 <br>

', [act]='1', title_no_show='1' WHERE id=2;
UPDATE {site_blocks} SET [name]='Расписание работы', [text]='08:00-20:00', [act]='1', title_no_show='1' WHERE id=3;
UPDATE {site_blocks} SET [name]='Инфо в подвале', [text]='© <insert name="show_year" year="2014" /> Все для компьютера — <br>
Комплектующие для компьютеров
', [act]='1', title_no_show='1' WHERE id=5;
UPDATE {site_blocks} SET [name]='Блок социальные сети', [text]='<div class="soc">
						<a href="#" class="soc__item fa-vk"></a>
						<a href="#" class="soc__item fa-facebook"></a>
						<a href="#" class="soc__item fa-twitter"></a>
					</div>', [act]='1', title_no_show='1' WHERE id=6;
UPDATE {site_blocks} SET [name]='Информация о доставке', [text]='<h3 class="heading">Доставка</h3>
<p>Доставка по Чебоксарам 150 Р</p>
<h3 class="heading">Самовывоз</h3>
<p>Бесплатно.&nbsp;<br /> Адрес пункта выдачи: <br />Ул. Алабяна, 16</p>
<h3 class="heading">Оплата</h3>
<p>Оплата налчиными курьеру или в пункте самовывоза.</p>', [act]='1', title_no_show='1' WHERE id=7;
UPDATE {site_blocks} SET [name]='Слайдер на главной', [text]='<insert name="show_block" module="bs" cat_id="1" template="slider" count="3">', [act]='1', title_no_show='1' WHERE id=8;
UPDATE {site_blocks} SET [name]='Новинки магазина на главной', [text]='<insert name="show_block" module="shop" template="slider" images="1" count="20">', [act]='1', title_no_show='1' WHERE id=9;
UPDATE {site_blocks} SET [name]='Отзывы клиентов на главной', [text]='<insert name="show_block" module="faq" count="10" site_id="12">', [act]='1', title_no_show='1' WHERE id=10;
UPDATE {site_blocks} SET [name]='Блок консультация', [text]='<insert name="show_form" module="feedback" site_id="7" template="popup">', [act]='1', title_no_show='1' WHERE id=11;
DELETE FROM {site_blocks_site_rel};
INSERT IGNORE INTO {site_blocks_site_rel} (`element_id`,`site_id`) VALUES (3,0);
INSERT IGNORE INTO {site_blocks_site_rel} (`element_id`,`site_id`) VALUES (6,0);
INSERT IGNORE INTO {site_blocks_site_rel} (`element_id`,`site_id`) VALUES (1,0);
INSERT IGNORE INTO {site_blocks_site_rel} (`element_id`,`site_id`) VALUES (8,0);
INSERT IGNORE INTO {site_blocks_site_rel} (`element_id`,`site_id`) VALUES (9,0);
INSERT IGNORE INTO {site_blocks_site_rel} (`element_id`,`site_id`) VALUES (10,0);
INSERT IGNORE INTO {site_blocks_site_rel} (`element_id`,`site_id`) VALUES (11,0);
INSERT IGNORE INTO {site_blocks_site_rel} (`element_id`,`site_id`) VALUES (5,0);
INSERT IGNORE INTO {site_blocks_site_rel} (`element_id`,`site_id`) VALUES (2,0);
INSERT IGNORE INTO {site_blocks_site_rel} (`element_id`,`site_id`) VALUES (7,0);
INSERT IGNORE INTO {menu_category} (`id`) VALUES (1),(2);
UPDATE {menu_category} SET [name]='Меню верхнее', [act]='1' WHERE id=1;
UPDATE {menu_category} SET [name]='Меню интернет-магазин', [act]='1' WHERE id=2;
DELETE FROM {menu_category_site_rel};
INSERT IGNORE INTO {menu_category_site_rel} (`element_id`) VALUES (1),(2);
INSERT IGNORE INTO {bs_category} (`id`) VALUES (1);
UPDATE {bs_category} SET `name`='Слайдер на главной', `act`='1' WHERE id=1;
