<?php

/**
 * Шаблон блока «Сортировать» с ссылками на направление сортировки
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

$link_sort = $result["link_sort"];
$sort_config = $result['sort_config'];

echo '<div class="sort">';
foreach ($sort_config['sort_fields_names'] as $i => $name) {
    $href = (empty($link_sort[$i]) ? $link_sort[$i + 1] : $link_sort[$i]);
    $class = '';

    if (empty($link_sort[$i]) || empty($link_sort[$i + 1])) {
        $class.=" sort__item_active";
    }

    echo '<a href="'.BASE_PATH_HREF.$href.'" class="sort__item' . $class . '">' . $name . '</a>';
}

echo '</div>';
