<?php
/**
 * Шаблон рейтинга элемента
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2015 OOO «Диафан» (http://www.diafan.ru/) 
 */

if (! defined('DIAFAN'))
{
	include dirname(dirname(dirname(__FILE__))).'/includes/404.php';
}


echo '<span class="js_rating_votes" module_name="'.$result["module_name"].'" element_id="'.$result["element_id"].'" element_type="'.$result["element_type"].'"'
.($result["disabled"] ? ' disabled="disabled"' : '').'>';
for ($i = 0; $i < $result["rating"]; $i++)
{
	//echo '<img src="'.BASE_PATH.Custom::path('modules/rating/img/rplus.png').'" alt="+" width="16" height="16" class="js_rating_votes_item">';
    echo '<span class="rating__item rating__item_active js_rating_votes_item"></span>';
}
for ($i = 0; $i < 5 - $result["rating"]; $i++)
{
    echo '<span class="rating__item js_rating_votes_item"></span>';
}
echo '</span>';