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

echo '<div class="sort">';
foreach ($result['rows'][0] as $row) {



    
        $href = (!empty($row["othurl"]) ? $row["othurl"] : BASE_PATH_HREF . $row['link']);
        $active = ($row['active'] || $row['active_child']) ? ' sort__item_active' : '';

        echo '<a href="' . $href . '" class="sort__item' . $active . '">' . $row['name'] . '</a>';
    
} echo '</div>';
