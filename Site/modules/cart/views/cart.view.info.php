<?php

/**
 * Шаблон информации о товарах в корзине
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




if (!empty($result["rows"])) {
    echo '<div class="basket__list">';
    echo '<form action="" method="POST" class="js_cart_block_form cart_block_form ajax">
	<input type="hidden" name="module" value="cart">
	<input type="hidden" name="action" value="recalc">
	<input type="hidden" name="form_tag" value="' . $result["form_tag"] . '">';

    foreach ($result['rows'] as $row) {
        echo '<div class="basket__item">
            <input type="hidden"  value="'.$row["count"].'" name="editshop'.$row["id"].'" >
							<a class="basket__item__link" href="' . BASE_PATH_HREF . $row['link'] . '">';

        if (!empty($row['img'])) {

            echo '<img src="' . $row["img"]["src"] . '" alt="' . $row["img"]["alt"] . '" title="' . $row["img"]["title"] . '" class="basket__item__pic">
							';
        }
        echo $row['name'] . '</a>
            <div class="basket__item__price">' . $row['price'] . ' ' . $result['currency'] . '</div>
            <div class="basket__item__del js_cart_remove" confirm="' . $this->diafan->_('Вы действительно хотите удалить товар из корзины?', false) . '"><input style="display:none" type="checkbox" id="del' . $row["id"] . '" name="del' . $row["id"] . '" value="1">' . $this->diafan->_('УДАЛИТЬ') . '</div>
						</div>';
    }


    echo '<div class="basket__footer">
							<div class="basket__sum">
								' . $this->diafan->_('Итого') . ':
								<span class="basket__sum__val">' . $result["summ_goods"] . ' ' . $result['currency'] . '</span>
							</div>
							
							<a href="' . $result["link"] . '" class="btn btn_basket">' . $this->diafan->_('Оформить') . '</a>
						</div>';

    echo '<div class="errors error"' . ($result["error"] ? '>' . $result["error"] : ' style="display:none">') . '</div></form></div>';
}
	