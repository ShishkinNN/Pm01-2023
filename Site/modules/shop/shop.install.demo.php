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

class Shop_install_demo extends Install
{
	/**
	 * @var array демо-данные
	 */
	public $demo = array(
		"site" => array(
			array(
				"id" => 13,
				"name" => array("Каталог продукции"),
				"rewrite" => "shop",
				"theme" => "catalog.php",
				"sort" => 2,
				"menu" => "1",
				"module_name" => "shop",
			),
			array(
				"id" => 14,
				"name" => array("Корзина"),
				"rewrite" => "shop/cart",
				"sort" => 14,
				"module_name" => "cart",
				"parent_id" => "13",
			),
			array(
				"id" => 16,
				"name" => array("Отложенные"),
				"rewrite" => "shop/wishlist",
				"sort" => 16,
				"module_name" => "wishlist",
				"parent_id" => "13",
			),
		),
		"config" => array(
			array(
				"name" => "hide_compare",
				"value" => "1",
			),
			array(
				"name" => "order_redirect",
				"value" => "36",
			),
			array(
				"name" => "attachments_access_admin",
				"value" => "1",
			),
			array(
				"name" => "currency",
				"value" => "руб.",
			),
			array(
				"name" => "comments",
				"value" => "1",
			),
			array(
				"name" => "rating",
				"value" => "1",
			),
			array(
				"name" => "keywords",
				"value" => "1",
			),
			array(
				"name" => "images_variations_element",
				"value" => "a:4:{i:0;a:2:{s:4:\"name\";s:5:\"large\";s:2:\"id\";s:1:\"3\";}i:1;a:2:{s:4:\"name\";s:6:\"medium\";s:2:\"id\";s:1:\"1\";}i:2;a:2:{s:4:\"name\";s:7:\"preview\";s:2:\"id\";s:1:\"4\";}i:3;a:2:{s:4:\"name\";s:2:\"id\";s:2:\"id\";s:1:\"6\";}}",
			),
			array(
				"name" => "images_variations_cat",
				"value" => "a:2:{i:0;a:2:{s:4:\"name\";s:5:\"large\";s:2:\"id\";s:1:\"4\";}i:1;a:2:{s:4:\"name\";s:6:\"medium\";s:2:\"id\";s:1:\"4\";}}",
			),
			array(
				"name" => "images_variations_brand",
				"value" => "a:3:{i:0;a:2:{s:4:\"name\";s:5:\"large\";s:2:\"id\";s:1:\"3\";}i:1;a:2:{s:4:\"name\";s:6:\"medium\";s:2:\"id\";s:1:\"1\";}i:2;a:2:{s:4:\"name\";s:7:\"preview\";s:2:\"id\";s:1:\"4\";}}",
			),
			array(
				"name" => "nameshop",
				"value" => "123",
			),
			array(
				"name" => "subject_waitlist",
				"value" => "Товар поступил на склад.",
			),
			array(
				"name" => "message_waitlist",
				"value" => "Здравствуйте!<br>Товар <a href=\"%link\">%good</a> поступил на склад.",
			),
			array(
				"name" => "mes",
				"value" => "Вы оформили заказ. Далее Вы можете оплатить его.",
			),
			array(
				"name" => "desc_payment",
				"value" => "Oplata zakaza #%id",
			),
			array(
				"name" => "payment_success_text",
				"value" => "<p>Спасибо, платеж успешно принят. В ближайшее время мы с Вами свяжемся для уточнения деталей заказа.</p>",
			),
			array(
				"name" => "payment_fail_text",
				"value" => "<p>Извините, платеж не прошел.</p>",
			),
			array(
				"name" => "subject",
				"value" => "Вы оформили заказ %id на сайте %title (%url).",
			),
			array(
				"name" => "message",
				"value" => "Здравствуйте!<br>Вы оформили заказ на сайте %title (%url):<br><br>Номер заказа: %id<br>%order<br>Способ оплаты: %payment<br><br>%message<br><br>Спасибо за Ваш заказ! В ближайшее время мы с Вами свяжемся для подтверждения заказа",
			),
			array(
				"name" => "subject_change_status",
				"value" => "Статус заказа изменен",
			),
			array(
				"name" => "message_change_status",
				"value" => "Здравствуйте!<br>Статус заказ №%order изменен на «%status».",
			),
			array(
				"name" => "file_sale_message",
				"value" => "Здравствуйте!<br>Вы оформили заказ на сайте %title (%url):<br><br>Номер заказа: %id<br>Файлы можно скачать по ссылкам в течении часа: %files<br><br>Спасибо за Ваш заказ!",
			),
			array(
				"name" => "sendsmsadmin",
				"value" => "0",
			),
			array(
				"name" => "currencyratesel",
				"value" => "",
			),
			array(
				"name" => "one_click",
				"value" => "",
			),
		),
		"shop_category" => array(
			array(
				"id" => 1,
				"name" => array("Процессоры"),
				"rewrite" => "shop/protsessory",
				"sort" => 1,
				"menu" => array("2", "1"),
				"menu" => array("2", "1"),
			),
			array(
				"id" => 2,
				"name" => array("Материнские платы "),
				"rewrite" => "shop/materinskie-platy-",
				"sort" => 2,
				"menu" => array("2", "1"),
				"menu" => array("2", "1"),
			),
			array(
				"id" => 3,
				"name" => array("Видеокарты"),
				"rewrite" => "shop/videokarty",
				"sort" => 3,
				"menu" => array("2", "1"),
				"menu" => array("2", "1"),
			),
			array(
				"id" => 4,
				"name" => array("Жесткие диски"),
				"rewrite" => "shop/zhestkie-diski",
				"sort" => 4,
				"menu" => array("2", "1"),
				"menu" => array("2", "1"),
			),
			array(
				"id" => 5,
				"name" => array("Модули памяти"),
				"rewrite" => "shop/moduli-pamyati",
				"sort" => 5,
				"menu" => array("2", "1"),
				"menu" => array("2", "1"),
			),
			array(
				"id" => 6,
				"name" => array("Блоки питания"),
				"rewrite" => "shop/bloki-pitaniya",
				"sort" => 6,
				"menu" => array("2", "1"),
				"menu" => array("2", "1"),
			),
		),
		"shop_param" => array(
			array(
				"id" => 1,
				"name" => array("Тип поставки"),
				"type" => "text",
				"sort" => 1,
			),
			array(
				"id" => 2,
				"name" => array("Серия"),
				"type" => "text",
				"sort" => 2,
			),
			array(
				"id" => 3,
				"name" => array("Разъем"),
				"type" => "text",
				"sort" => 3,
			),
			array(
				"id" => 4,
				"name" => array("Ядро"),
				"type" => "text",
				"cat_id" => 1,
				"sort" => 4,
			),
			array(
				"id" => 5,
				"name" => array("Количество ядер"),
				"type" => "text",
				"cat_id" => 1,
				"sort" => 5,
			),
			array(
				"id" => 6,
				"name" => array("Количество потоков"),
				"type" => "text",
				"cat_id" => 1,
				"sort" => 6,
			),
			array(
				"id" => 7,
				"name" => array("Техпроцесс"),
				"type" => "text",
				"cat_id" => 1,
				"sort" => 7,
			),
			array(
				"id" => 8,
				"name" => array("Встроенная видеокарта"),
				"type" => "text",
				"sort" => 8,
			),
			array(
				"id" => 9,
				"name" => array("Память "),
				"type" => "text",
				"cat_id" => 3,
				"sort" => 9,
			),
			array(
				"id" => 10,
				"name" => array("Тип видеопамяти"),
				"type" => "text",
				"cat_id" => 3,
				"sort" => 10,
			),
			array(
				"id" => 11,
				"name" => array("Частота графического процессора"),
				"type" => "text",
				"cat_id" => 3,
				"sort" => 11,
			),
			array(
				"id" => 12,
				"name" => array("Частота видеопамяти"),
				"type" => "text",
				"cat_id" => 3,
				"sort" => 12,
			),
			array(
				"id" => 13,
				"name" => array("Объем физической памяти"),
				"type" => "multiple",
				"sort" => 13,
				"required" => "1",
				"search" => "1",
				"select" => array(array("id" => "1", "name" => array("1 гб")), array("id" => "2", "name" => array("2 гб")), array("id" => "3", "name" => array("4 гб"))),
			),
		),
		"shop" => array(
			array(
				"id" => 2,
				"cat_id" => 2,
				"brand_id" => 1,
				"name" => array("Материнская плата Asus H81M-K"),
				"text" => array("<p>Как правило, описание товара включает основные характеристики, производителя, цену и несколько фотографий.<br /> <br /> Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\"><span>ссылки</span></a>&nbsp;на другие страницы.</p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>"),
				"rewrite" => "shop/materinskie-platy-/materinskaya-plata-asus-h81m-k",
				"images" => array("4_materinskaya-plata-asus-h81m-k.jpg", "5_materinskaya-plata-asus-h81m-k.jpg", "6_materinskaya-plata-asus-h81m-k.jpg"),
				"price" => array(array("price" => "1840")),
			),
			array(
				"id" => 3,
				"cat_id" => 3,
				"name" => array("Видеокарта ASUS GTX 760-DC20C-2GD5"),
				"text" => array("<p>Как правило, описание товара включает основные характеристики, производителя, цену и несколько фотографий.<br /> <br /> Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\"><span>ссылки</span></a>&nbsp;на другие страницы.</p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>"),
				"rewrite" => "shop/videokarty/videokarta-asus-gtx-760-dc20c-2gd5",
				"images" => array("8_videokarta-asus-gtx-760-dc20c-2gd5.jpg", "9_videokarta-asus-gtx-760-dc20c-2gd5.jpg", "10_videokarta-asus-gtx-760-dc20c-2gd5.jpg"),
				"param" => array("9" => "2048 MB", "10" => "GDDR3", "11" => "520 МГц", "12" => "1200 МГц"),
				"price" => array(array("price" => "9540")),
			),
			array(
				"id" => 5,
				"cat_id" => 6,
				"name" => array("400W ATX FSP 400PAF 80mm"),
				"text" => array("<p>Как правило, описание товара включает основные характеристики, производителя, цену и несколько фотографий.<br /> <br /> Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\"><span>ссылки</span></a>&nbsp;на другие страницы.</p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>"),
				"rewrite" => "shop/bloki-pitaniya/400w-atx-fsp-400paf-80mm",
				"images" => array("14_400w-atx-fsp-400paf-80mm.jpg", "16_400w-atx-fsp-400paf-80mm.jpg"),
				"price" => array(array("price" => "2470", "param" => array("13" => "0"))),
			),
			array(
				"id" => 7,
				"cat_id" => 1,
				"brand_id" => 4,
				"article" => "11223344",
				"name" => array("Процессор Intel Pentium G2030, OEM"),
				"anons" => array("<p>3.00ГГц, 3МБ, LGA1155, OEM, 3.00ГГц, 3МБ, LGA1155, OEM</p>"),
				"text" => array("<p>Как правило, описание товара включает основные характеристики, производителя, цену и несколько фотографий.<br /> <br /> Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\"><span>ссылки</span></a>&nbsp;на другие страницы.</p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>"),
				"rewrite" => "shop/protsessory/protsessor-intel-pentium-g2030-oem",
				"images" => array("17_protsessor-intel-pentium-g2030-oem.jpg"),
				"param" => array("1" => "OEM", "2" => "Pentium", "3" => "Socket 1155", "4" => "Ivy Bridge", "5" => "2", "6" => "2", "7" => "22 нм", "8" => "Intel HD Graphics"),
				"price" => array(array("price" => "2500", "param" => array("13" => "0"))),
			),
			array(
				"id" => 8,
				"cat_id" => 2,
				"brand_id" => 1,
				"name" => array("Материнская плата Asus H81M-K"),
				"text" => array("<p>Как правило, описание товара включает основные характеристики, производителя, цену и несколько фотографий.<br /> <br /> Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\"><span>ссылки</span></a>&nbsp;на другие страницы.</p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>"),
				"rewrite" => "shop/materinskie-platy-/materinskaya-plata-asus-h81m-k8",
				"images" => array("20_materinskaya-plata-asus-h81m-k.jpg"),
				"price" => array(array("price" => "1840")),
			),
			array(
				"id" => 9,
				"cat_id" => 2,
				"brand_id" => 2,
				"name" => array("Материнская плата Asus H81M-K"),
				"text" => array("<p>Как правило, описание товара включает основные характеристики, производителя, цену и несколько фотографий.<br /> <br /> Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\"><span>ссылки</span></a>&nbsp;на другие страницы.</p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>"),
				"rewrite" => "shop/materinskie-platy-/materinskaya-plata-asus-h81m-k9",
				"images" => array("62_materinskaya-plata-asus-h81m-k.jpg"),
				"price" => array(array("price" => "1840", "param" => array("13" => "0"))),
			),
			array(
				"id" => 10,
				"cat_id" => 3,
				"name" => array("Видеокарта ASUS GTX 760-DC20C-2GD5"),
				"text" => array("<p>Как правило, описание товара включает основные характеристики, производителя, цену и несколько фотографий.<br /> <br /> Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\"><span>ссылки</span></a>&nbsp;на другие страницы.</p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>"),
				"rewrite" => "shop/videokarty/videokarta-asus-gtx-760-dc20c-2gd510",
				"images" => array("22_videokarta-asus-gtx-760-dc20c-2gd5.jpg"),
				"param" => array("9" => "2048 MB", "10" => "GDDR3", "11" => "520 МГц", "12" => "1200 МГц"),
				"price" => array(array("price" => "9540")),
			),
			array(
				"id" => 12,
				"cat_id" => 4,
				"brand_id" => 2,
				"name" => array("1Tb Seagate ST1000VX000 (7200rpm) 64Mb SATA-III SV35 Series 3,5&quot;"),
				"rewrite" => "shop/zhestkie-diski/1tb-seagate-st1000vx000-7200rpm-64mb-sata-iii-sv3512",
				"images" => array("24_1tb-seagate-st1000vx000-7200rpm-64mb-sata-iii-sv.jpg"),
				"price" => array(array("price" => "4790")),
			),
			array(
				"id" => 13,
				"cat_id" => 4,
				"brand_id" => 3,
				"name" => array("1Tb Seagate ST1000VX000 (7200rpm) 64Mb SATA-III SV35 Series 3,5&quot;"),
				"rewrite" => "shop/zhestkie-diski/1tb-seagate-st1000vx000-7200rpm-64mb-sata-iii-sv3513",
				"images" => array("23_1tb-seagate-st1000vx000-7200rpm-64mb-sata-iii-sv.jpg", "63_1tb-seagate-st1000vx000-7200rpm-64mb-sata-iii-sv.jpg"),
				"price" => array(array("price" => "4790", "param" => array("13" => "0"))),
			),
			array(
				"id" => 15,
				"cat_id" => 1,
				"brand_id" => 4,
				"name" => array("Процессор Intel Pentium G2030, OEM"),
				"anons" => array("<p>3.00ГГц, 3МБ, LGA1155, OEM, 3.00ГГц, 3МБ, LGA1155, OEM</p>"),
				"text" => array("<p>Как правило, описание товара включает основные характеристики, производителя, цену и несколько фотографий.<br /> <br /> Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\"><span>ссылки</span></a>&nbsp;на другие страницы.</p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>"),
				"rewrite" => "shop/protsessory/kopiya-protsessor-intel-pentium-g2030-oem15",
				"images" => array("56_kopiya-protsessor-intel-pentium-g2030.jpg", "65_protsessor-intel-pentium-g2030-oem.jpg"),
				"param" => array("1" => "OEM", "2" => "Pentium", "3" => "Socket 1155", "4" => "Ivy Bridge", "5" => "2", "6" => "2", "7" => "22 нм", "8" => "Intel HD Graphics"),
				"price" => array(array("price" => "2500", "param" => array("13" => "0"))),
			),
			array(
				"id" => 18,
				"cat_id" => 1,
				"brand_id" => 4,
				"name" => array(" Процессор Intel Pentium G2030, OEM"),
				"anons" => array("<p>3.00ГГц, 3МБ, LGA1155, OEM, 3.00ГГц, 3МБ, LGA1155, OEM</p>"),
				"text" => array("<p>Как правило, описание товара включает основные характеристики, производителя, цену и несколько фотографий.<br /> <br /> Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href=\"https://cloud.diafan.ru/\"><span>ссылки</span></a>&nbsp;на другие страницы.</p>
<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите \"режим редактирования\" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>"),
				"rewrite" => "shop/protsessory/-protsessor-intel-pentium-g2030-oem",
				"images" => array("64_-protsessor-intel-pentium-g2030-oem.jpg"),
				"param" => array("1" => "OEM", "2" => "Pentium", "3" => "Socket 1155", "4" => "Ivy Bridge", "5" => "2", "6" => "2", "7" => "22 нм", "8" => "Intel HD Graphics"),
				"price" => array(array("price" => "2500", "param" => array("13" => "0"))),
			),
		),
		"shop_brand" => array(
			array(
				"id" => 1,
				"name" => array("ASUS"),
				"rewrite" => "shop/asus",
				"sort" => 1,
			),
			array(
				"id" => 2,
				"name" => array("Acer"),
				"rewrite" => "shop/acer",
				"sort" => 2,
			),
			array(
				"id" => 3,
				"name" => array("Samsung"),
				"rewrite" => "shop/samsung",
				"sort" => 3,
			),
			array(
				"id" => 4,
				"name" => array("Intel"),
				"rewrite" => "shop/intel",
				"sort" => 4,
			),
		),
		"shop_currency" => array(
			array(
				"name" => "Euro",
				"exchange_rate" => "50",
			),
		),
		"shop_delivery" => array(
			array(
				"id" => 1,
				"name" => array("Курьер"),
				"text" => array("Товар доставляется курьером до двери Вашего дома."),
				"thresholds" => array(array("price" => "500"), array("amount" => "6000")),
			),
			array(
				"id" => 2,
				"name" => array("Почта России"),
				"text" => array("Доставка по всей России небольших посылок"),
				"thresholds" => array(array("price" => "650")),
			),
			array(
				"id" => 3,
				"name" => array("EMS-доставка"),
				"text" => array("Экспресс-доставка до дверей курьером в любую точку России"),
				"thresholds" => array(array("price" => "1200")),
			),
		),
		"shop_discount" => array(
			array(
				"id" => 1,
				"discount" => "5",
			),
		),
		"shop_import_category" => array(
			array(
				"id" => 1,
				"name" => "Импорт товаров",
				"format" => "csv",
				"type" => "good",
				"count_part" => 200,
				"delimiter" => ";",
				"encoding" => "cp1251",
				"sub_delimiter" => "|",
			),
			array(
				"id" => 2,
				"name" => "Импорт категорий",
				"format" => "csv",
				"type" => "category",
				"count_part" => 200,
				"delimiter" => ";",
				"encoding" => "cp1251",
				"sub_delimiter" => "|",
			),
		),
		"shop_import" => array(
			array(
				"name" => "Идентификатор",
				"type" => "id",
				"params" => "a:1:{s:4:\"type\";s:4:\"site\";}",
				"cat_id" => 1,
			),
			array(
				"name" => "Артикул товара",
				"type" => "article",
				"cat_id" => 1,
			),
			array(
				"name" => "Название товара",
				"type" => "name",
				"cat_id" => 1,
			),
			array(
				"name" => "Краткое описание",
				"type" => "anons",
				"cat_id" => 1,
			),
			array(
				"name" => "Полное описание товара",
				"type" => "text",
				"cat_id" => 1,
			),
			array(
				"name" => "Цена",
				"type" => "price",
				"params" => "a:5:{s:9:\"delimitor\";s:1:\"&\";s:11:\"select_type\";s:3:\"key\";s:5:\"count\";i:0;s:8:\"currency\";i:0;s:15:\"select_currency\";s:3:\"key\";}",
				"cat_id" => 1,
			),
			array(
				"name" => "Количество",
				"type" => "count",
				"params" => "a:2:{s:9:\"delimitor\";s:1:\"&\";s:11:\"select_type\";s:3:\"key\";}",
				"cat_id" => 1,
			),
			array(
				"name" => "Хит (1/0)",
				"type" => "hit",
				"cat_id" => 1,
			),
			array(
				"name" => "Новинка (1/0)",
				"type" => "new",
				"cat_id" => 1,
			),
			array(
				"name" => "Акция (1/0)",
				"type" => "action",
				"cat_id" => 1,
			),
			array(
				"name" => "Идентификатор",
				"type" => "id",
				"params" => "a:1:{s:4:\"type\";s:4:\"site\";}",
				"cat_id" => 2,
			),
			array(
				"name" => "Название категории",
				"type" => "name",
				"cat_id" => 2,
			),
			array(
				"name" => "Краткое описание категории",
				"type" => "anons",
				"cat_id" => 2,
			),
			array(
				"name" => "Полное описание категории",
				"type" => "text",
				"cat_id" => 2,
			),
		),
		"shop_order_param" => array(
			array(
				"id" => 1,
				"name" => array("ФИО или название компании"),
				"type" => "text",
				"info" => "name",
				"sort" => 1,
				"required" => "1",
				"show_in_form" => "1",
				"show_in_form_one_click" => "1",
			),
			array(
				"id" => 2,
				"name" => array("E-mail"),
				"type" => "email",
				"info" => "email",
				"sort" => 2,
				"required" => "1",
				"show_in_form" => "1",
			),
			array(
				"id" => 3,
				"name" => array("Контактные телефоны (с кодом города)"),
				"type" => "text",
				"info" => "phone",
				"sort" => 3,
				"required" => "1",
				"show_in_form" => "1",
				"show_in_form_one_click" => "1",
			),
			array(
				"id" => 4,
				"name" => array("Индекс"),
				"type" => "text",
				"info" => "zip",
				"sort" => 4,
				"show_in_form" => "1",
			),
			array(
				"id" => 5,
				"name" => array("Город"),
				"type" => "text",
				"info" => "city",
				"sort" => 5,
				"show_in_form" => "1",
			),
			array(
				"id" => 6,
				"name" => array("Улица, проспект и пр."),
				"type" => "text",
				"info" => "street",
				"sort" => 6,
				"show_in_form" => "1",
			),
			array(
				"id" => 7,
				"name" => array("Номер дома"),
				"type" => "text",
				"info" => "building",
				"sort" => 7,
				"show_in_form" => "1",
			),
			array(
				"id" => 8,
				"name" => array("Корпус"),
				"type" => "text",
				"info" => "suite",
				"sort" => 8,
				"show_in_form" => "1",
			),
			array(
				"id" => 9,
				"name" => array("Квартира, офис"),
				"type" => "text",
				"info" => "flat",
				"sort" => 9,
				"show_in_form" => "1",
			),
			array(
				"id" => 10,
				"name" => array("Дополнительно"),
				"type" => "textarea",
				"info" => "comment",
				"sort" => 10,
				"show_in_form" => "1",
			),
		),
		"shop_order_status" => array(
			array(
				"id" => 1,
				"name" => array("Новый"),
			),
			array(
				"id" => 2,
				"name" => array("В обработке"),
				"status" => 1,
			),
			array(
				"id" => 3,
				"name" => array("Отменен"),
				"status" => 2,
			),
			array(
				"id" => 4,
				"name" => array("Выполнен"),
				"status" => 3,
			),
		),
	);
}