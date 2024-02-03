<?php

/**
 * Шаблон постраничной навигации для пользовательской части
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

if ($result) {

    echo '<div class="pagenator">';
    foreach ($result as $l) {
        switch ($l["type"]) {
            default:
                echo '<a href="' . BASE_PATH_HREF . $l["link"] . '" class="pagenator__item">' . $l["name"] . '</a>';
                break;

            case "current":
                echo '<span class="pagenator__item pagenator__item_active">' . $l["name"] . '</span>';
                break;

            case "first":
                echo '<a class="pagenator__item pagenator__item_prev" href="' . BASE_PATH_HREF . $l["link"] . '"></a>';
                break;

            case "last":
                echo '<a class="pagenator__item pagenator__item_next" href="' . BASE_PATH_HREF . $l["link"] . '"></a>';
                break;
        }
    }


    echo '</div>';
}  