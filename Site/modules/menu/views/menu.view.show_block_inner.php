<?php

/**
 * Шаблон меню, оформленного шаблоном
 *
 * Шаблонный тег: вывод меню
 * Выполняется в том случае, если передан параметр template=default при вызове тега
 * <insert name="show_block" module="menu" id="1" template="default">
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2015 OOO «Диафан» (http://www.diafan.ru/)
 */
if (!defined('DIAFAN')) {
    include dirname(dirname(dirname(__FILE__))) . '/includes/404.php';
}

if (empty($result["rows"])) {
    return false;
}


foreach ($result['rows'][0] as $r) {
    if (($r["active_child"] || $r["active"]) && count($result['rows'][$r['id']])) {
        echo '<ul class="inside-nav">';

        foreach ($result['rows'][$r['id']] as $row) {
            $href = (!empty($row["othurl"]) ? $row["othurl"] : BASE_PATH_HREF . $row['link']);
            $active = ($row['active'] || $row['active_child']) ? ' inside-nav__item_active' : '';

            echo '<li class="inside-nav__item' . $active . '">
							<a href="' . $href . '" class="inside-nav__link">' . $row['name'] . '</a>
						</li>';
        }
        echo '</ul>';
    }
}