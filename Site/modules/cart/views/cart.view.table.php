<?php
/**
 * Шаблон таблицы с товарами в корзине
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2015 OOO «Диафан» (http://www.diafan.ru/)
 */
if (!defined('DIAFAN')) {
    include dirname(dirname(dirname(__FILE__))).'/includes/404.php';
}

//шапка таблицы
echo '<table class="cart" cellspacing="0">
	<tr>
		<th class="cart_first_th"></th>
		<th>'.$this->diafan->_('Наименование товара').'</th>
		<th>'.$this->diafan->_('Количество').'</th>
		<th>'.$this->diafan->_('Цена').', '.$result["currency"].'</th>
		'.($result["discount"] ? '
		<th>'.$this->diafan->_('Скидка').'</th>
		<th>'.$this->diafan->_('Цена со скидкой').', '.$result["currency"].'</th>
		' : '').'
		<th>'.$this->diafan->_('Сумма').', '.$result["currency"].'</th>
		'.(empty($result["hide_form"]) ? '<th class="cart_last_th">'.$this->diafan->_('Удалить').'</th>' : '').'
	</tr>';
//товары
if (! empty($result["rows"]))
{
	foreach ($result["rows"] as $row)
	{
		echo '
		<tr class="js_cart_item">
			<td class="cart_img">';
		if (!empty($row["img"]))
		{
			echo '<a href="'.BASE_PATH_HREF.$row["link"].'"><img src="'.$row["img"]["src"].'" width="'.$row["img"]["width"].'" height="'.$row["img"]["height"].'" alt="'.$row["img"]["alt"].'" title="'.$row["img"]["title"].'"></a> ';
		}
		echo '</td>
			<td class="cart_name">';
			if(! empty($row["cat"]))
			{
				echo '<a href="'.BASE_PATH_HREF.$row["cat"]["link"].'">'.$row["cat"]["name"].'</a> / ';
			}
			echo '<a href="'.BASE_PATH_HREF.$row["link"].'">'.$row["name"];
			echo (!empty($row["article"]) ? '<br/>'.$this->diafan->_('Артикул').': '.$row["article"] : '');
			echo '</a></td>
			<td class="js_cart_count cart_count"><nobr>'.(empty($result["hide_form"]) ? ' <span class="js_cart_count_minus cart_count_minus"><i class="fa fa-minus-circle"></i></span> <input type="text" class="number" value="'.$row["count"].'" min="0" name="editshop'.$row["id"].'" size="2"> <span class="js_cart_count_plus cart_count_plus"><i class="fa fa-plus-circle"></i></span> ' : $row["count"]).'</nobr></td>';
			if($result["discount"])
			{
			    echo '<td class="cart_old_price">'.($row["discount"] ? $row["old_price"] : '').'</td>';
			    echo '<td class="cart_discount">'.($row["discount"] ? $row["discount"] : '').'</td>';
			}
			echo '<td class="cart_price">'.$row["price"].'</td>
			<td class="cart_summ">'.$row["summ"].'</td>
			'.(empty($result["hide_form"]) ? '<td class="cart_remove"><label for="del'.$row["id"].'" class="js_cart_remove" data-confirm="'.$this->diafan->_('Вы действительно хотите удалить товар из корзины?', false).'"><span></span></label><input style="display:none;" type="checkbox" id="del'.$row["id"].'" name="del'.$row["id"].'" value="1"></td>' : '').'
		</tr>';
	}

	// общая скидка от объема
	if(! empty($result["discount_total"]) || ! empty($result["discount_next"]))
	{
		echo '
			<tr>
				<td colspan="3">';
		if(! empty($result["discount_next"]) && empty($result["hide_form"]))
		{
			echo $this->diafan->_('До скидки %s осталось %s', true, $result["discount_next"]["discount"], $result["discount_next"]["summ"]);
		}
		echo '</td>';
		if($result["discount"])
		{
			echo '<td colspan="2">&nbsp;</td>';
		}
		echo '<td>&nbsp;</td>
		<td class="cart_discount_total">';
		if(! empty($result["discount_total"]))
		{
			echo $this->diafan->_('Скидка').' '.$result["discount_total"]["discount"];
		}
		echo '</td>
		'.(empty($result["hide_form"]) ? '<td class="cart_last_td">&nbsp;</td>' : '').'
		</tr>';
	}

	//итоговая строка для товаров
	echo '
		<tr class="cart_last_tr">
			<td class="cart_total" colspan="2">'.$this->diafan->_('Итого за товары').'</td>
			<td class="cart_count">'.$result["count"].'</td>';
	if($result["discount"])
	{
		echo '<td colspan="2">&nbsp;</td>';
	}
	echo '<td>&nbsp;</td>
	<td class="cart_summ">';
	if(! empty($result["discount_total"]))
	{
		echo '<div class="cart_summ_old_total">'.$result["old_summ_goods"].'</div>';
	}
	echo $result["summ_goods"];
	echo '</td>
			'.(empty($result["hide_form"]) ? '<td class="cart_last_td">&nbsp;</td>' : '').'
		</tr>';

	//дополнительно
	if (! empty($result["additional_cost"])) 
	{
		echo '<tr><th colspan="'.($result["discount"] ? 7 : 5).'">'.$this->diafan->_('Дополнительно').'</th>
		<th class="cart_last_th">'.$this->diafan->_('Добавить').'</th></tr>';
		foreach ($result["additional_cost"] as $row)
		{
			if(! empty($result["hide_form"]) && ! in_array($row["id"], $result["cart_additional_cost"]) && ! $row["required"])
				continue;

			if ($row['amount'])
			{
				$row['text'] .= '<br>'.$this->diafan->_('Бесплатно от суммы').' '.$row['amount'].' '.$result["currency"];
			}
			echo '
			<tr>
				<td colspan="'.($result["discount"] ? 5 : 3).'">
					<div class="cart_additional_cost_name">'.$row["name"].'</div>
					'.(empty($result["hide_form"]) ? '<div class="cart_additional_cost_text">'.$row['text'].'</div>' : '').'
				</td>
				<td class="cart_price">'.($row['percent'] ? $row['percent'].'%' : $row["price"]).'</td>
				<td class="cart_summ">'.$row["summ"].'</td>
				'.(empty($result["hide_form"]) ? '<td class="cart_check">' : '');
			if(! $row["required"] && empty($result["hide_form"]))
			{
				echo '<input name="additional_cost_ids[]" id="additional_cost_'.$row['id'].'" value="'.$row['id'].'" type="checkbox" '.(in_array($row["id"], $result["cart_additional_cost"]) ? ' checked' : '').'><label for="additional_cost_'.$row['id'].'">&nbsp;</label>';
			}
			echo (empty($result["hide_form"]) ? '</td>' : '').'
			</tr>';
		}
	}

	//способы доставки
	if (! empty($result["delivery"])) 
	{
		echo '<tr><th colspan="'.($result["discount"] ? 7 : 5).'">'.$this->diafan->_('Способ доставки').'</th>
		<th class="cart_last_th">'.$this->diafan->_('Выбрать').'</th></tr>';
		foreach ($result["delivery"] as $row)
		{
			if(! empty($result["hide_form"]) && $row["id"] != $result["cart_delivery"])
				continue;

			if (! empty($row["thresholds"]) && empty($result["hide_form"]))
			{
			    foreach ($row["thresholds"]  as $r)
			    {
				if($r["amount"])
				{
				    $row['text'] .= '<br>'.($r["price"] ? $this->diafan->_('Стоимость').' '.$r["price"].' '.$result["currency"].' '.$this->diafan->_('от суммы') : $this->diafan->_('Бесплатно от суммы')).' '.$r['amount'].' '.$result["currency"];
				}
				else
				{
				    $row['text'] .= '<br>'.($r["price"] ? $this->diafan->_('Стоимость').' '.$r["price"].' '.$result["currency"] : $this->diafan->_('Бесплатно'));
				}
			    }
			}
			echo '
			<tr>
				<td colspan="'.($result["discount"] ? 6 : 4).'">
					<div class="cart_delivery_name">'.$row["name"].'</div>
					'.(empty($result["hide_form"]) ? '<div class="cart_delivery_text">'.$row['text'].'</div>' : '').'
				</td>
				<td class="cart_summ">'.$row["price"].'</td>
				'.(empty($result["hide_form"]) ? '<td class="cart_check"><input name="delivery_id" id="delivery_id_'.$row['id'].'" value="'.$row['id'].'" type="radio" '.($row["id"] == $result["cart_delivery"] ? ' checked' : '').'><label for="delivery_id_'.$row['id'].'">&nbsp;</label></td>' : '').'
			</tr>';
		}
	}
}


//итоговая строка таблицы
echo '
	<tr class="cart_last_tr">
		<td class="cart_total" colspan="'.($result["discount"] ? 6 : 4).'">'.$this->diafan->_('Итого к оплате').'</td>
		<td class="cart_summ">'.$result["summ"].'</td>
		'.(empty($result["hide_form"]) ? '<td class="cart_last_td">&nbsp;</td>' : '').'
	</tr>
</table>';
