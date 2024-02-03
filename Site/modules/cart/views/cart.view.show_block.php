<?php
/**
 * Шаблон блока корзины
 *
 * Шаблонный тег <insert name="show_block" module="cart" [template="шаблон"]>:
 * выводит информацию о заказанных товарах
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



echo '<div class="basket">
					<a href="'.$result['link'].'" class="basket__link"></a>
                                        <span id="show_cart" class="js_show_cart">'.$this->get('info', 'cart', $result).'</span>
					
					
				</div>';

