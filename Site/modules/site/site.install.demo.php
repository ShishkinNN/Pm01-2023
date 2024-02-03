<?php
/**
 * Установка модуля
 *
 * @package    Diafan.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2015 OOO «Диафан» (http://www.diafan.ru/)
 */
if (!defined("DIAFAN"))
{
	include dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/includes/404.php";
}

class Site_install_demo extends Install
{
	/**
	 * @var array демо-данные
	 */
	public $demo = array(
		"config" => array(
			array(
				"name" => "keywords",
				"value" => "1",
			),
		),
		"site" => array(
			array(
				"id" => 1,
				"name" => array("Главная страница"),
				"text" => array("<h2>О магазине</h2>
<p>О магазине, услугах и прочая подобная информация будет написана на этой странице. Можно написать любой объем текста, но желательно уложиться в несколько абзацев, ведь пользователи интернета ценят краткость и предметность. Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\">ссылки</a>&nbsp;на другие страницы.</p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>
<p><a href=\"map:lang_id=1;module_name=site;element_id=26;element_type=element;\" class=\"btn btn_box\">Подробнее</a></p>"),
				"rewrite" => "",
				"theme" => "site_start.php",
				"title_no_show" => "1",
				"sort" => 1,
			),
			array(
				"id" => 3,
				"sort" => 5,
			),
			array(
				"id" => 26,
				"name" => array("О магазине"),
				"text" => array("<p>О магазине,&nbsp;услугах и прочая подобная информация будет написана на этой странице. Можно написать любой объем текста, но желательно уложиться в несколько абзацев, ведь пользователи интернета ценят краткость и предметность. Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\">ссылки</a>&nbsp;на другие страницы. </p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>"),
				"rewrite" => "o-magazine",
				"sort" => 1,
				"menu" => "1",
			),
			array(
				"id" => 27,
				"name" => array("Доставка и оплата"),
				"text" => array("<p>Доставка и оплата&nbsp;и прочая подобная информация будет написана на этой странице. Можно написать любой объем текста, но желательно уложиться в несколько абзацев, ведь пользователи интернета ценят краткость и предметность. Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\">ссылки</a>&nbsp;на другие страницы. </p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>"),
				"rewrite" => "dostavka-i-oplata",
				"sort" => 4,
				"menu" => "1",
			),
			array(
				"id" => 28,
				"name" => array("Контакты"),
				"text" => array("<p>Контакты и прочая подобная информация будет написана на этой странице. Можно написать любой объем текста, но желательно уложиться в несколько абзацев, ведь пользователи интернета ценят краткость и предметность. Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\">ссылки</a>&nbsp;на другие страницы. </p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>"),
				"rewrite" => "kontakty",
				"sort" => 7,
				"menu" => "1",
			),
			array(
				"id" => 36,
				"name" => array("Заказ офомлен"),
				"text" => array("<p>Спасибо за Ваш заказ! В ближайшее время мы свяжемся с Вами!</p>"),
				"rewrite" => "zakaz-ofomlen",
				"sort" => 36,
			),
		),
		"site_blocks" => array(
			array(
				"id" => 1,
				"name" => array("Лого"),
				"text" => array("<center><font size=\"5\"><b>ВСЕ ДЛЯ КОМПЬЮТЕРА</b></font></center>"),
				"title_no_show" => "1",
				"hide_htmleditor" => "text",
			),
			array(
				"id" => 2,
				"name" => array("Телефон в шапке"),
				"text" => array("+7 8352 12-11-22 <br>

"),
				"title_no_show" => "1",
				"hide_htmleditor" => "text",
			),
			array(
				"id" => 3,
				"name" => array("Расписание работы"),
				"text" => array("08:00-20:00"),
				"title_no_show" => "1",
				"hide_htmleditor" => "text",
			),
			array(
				"id" => 5,
				"name" => array("Инфо в подвале"),
				"text" => array("© <insert name=\"show_year\" year=\"2014\" /> Все для компьютера — <br>
Комплектующие для компьютеров
"),
				"title_no_show" => "1",
				"hide_htmleditor" => "text",
			),
			array(
				"id" => 6,
				"name" => array("Блок социальные сети"),
				"text" => array("<div class=\"soc\">
						<a href=\"#\" class=\"soc__item fa-vk\"></a>
						<a href=\"#\" class=\"soc__item fa-facebook\"></a>
						<a href=\"#\" class=\"soc__item fa-twitter\"></a>
					</div>"),
				"title_no_show" => "1",
				"hide_htmleditor" => "text",
			),
			array(
				"id" => 7,
				"name" => array("Информация о доставке"),
				"text" => array("<h3 class=\"heading\">Доставка</h3>
<p>Доставка по Чебоксарам 150 Р</p>
<h3 class=\"heading\">Самовывоз</h3>
<p>Бесплатно.&nbsp;<br /> Адрес пункта выдачи: <br />Ул. Алабяна, 16</p>
<h3 class=\"heading\">Оплата</h3>
<p>Оплата налчиными курьеру или в пункте самовывоза.</p>"),
				"title_no_show" => "1",
			),
			array(
				"id" => 8,
				"name" => array("Слайдер на главной"),
				"text" => array("<insert name=\"show_block\" module=\"bs\" cat_id=\"1\" template=\"slider\" count=\"3\">"),
				"title_no_show" => "1",
				"hide_htmleditor" => "text",
			),
			array(
				"id" => 9,
				"name" => array("Новинки магазина на главной"),
				"text" => array("<insert name=\"show_block\" module=\"shop\" template=\"slider\" images=\"1\" count=\"20\">"),
				"title_no_show" => "1",
				"hide_htmleditor" => "text",
			),
			array(
				"id" => 10,
				"name" => array("Отзывы клиентов на главной"),
				"text" => array("<insert name=\"show_block\" module=\"faq\" count=\"10\" site_id=\"12\">"),
				"title_no_show" => "1",
				"hide_htmleditor" => "text",
			),
			array(
				"id" => 11,
				"name" => array("Блок консультация"),
				"text" => array("<insert name=\"show_form\" module=\"feedback\" site_id=\"7\" template=\"popup\">"),
				"title_no_show" => "1",
				"hide_htmleditor" => "text",
			),
		),
	);
}