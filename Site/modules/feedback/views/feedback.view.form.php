<?php
/**
 * Шаблон формы добавления сообщения в обратной связи
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

if (! empty($result["text"]))
{
	echo $result["text"];
	return;
}

echo '
<div class="feedback_form pp-order">
<h3 class="heading">'.$this->diafan->_('Консультация').'</h3>
<form method="POST" enctype="multipart/form-data" action="" class="ajax">
<input type="hidden" name="module" value="feedback">
<input type="hidden" name="action" value="add">
<input type="hidden" name="form_tag" value="'.$result["form_tag"].'">
<input type="hidden" name="site_id" value="'.$result["site_id"].'">
<input type="hidden" name="tmpcode" value="'.md5(mt_rand(0, 9999)).'">';

$required = false;
if (! empty($result["rows"]))
{
	foreach ($result["rows"] as $row) //вывод полей из конструктора форм
	{
		if($row["required"])
		{
			$required = true;
		}
		echo '<div class="feedback_form_param'.$row["id"].'">';

		switch ($row["type"])
		{
			case 'title':
				echo '<div class="infoform">'.$row["name"].':</div>';
				break;

			case 'text':
				echo '
				<input type="text" name="p'.$row["id"].'" class="field" placeholder="'.$row['name'].'" value="">';
				break;

			case "email":
				echo '
				<input type="email" name="p'.$row["id"].'" class="field" placeholder="'.$row['name'].'" value="">';
				break;

			case "phone":
				echo '
				<input type="tel" name="p'.$row["id"].'" class="field" placeholder="'.$row['name'].'" value="">';
				break;

			case 'textarea':
				echo '
				<textarea name="p'.$row["id"].'" class="textarea" placeholder="'.$row['name'].'" cols="66" rows="10"></textarea>';
				break;

			case 'date':
			case 'datetime':
				$timecalendar  = true;
				echo '
					<input type="text" name="p'.$row["id"].'" placeholder="'.$row['name'].'" value="" class="timecalendar field" showTime="'
					.($row["type"] == 'datetime'? 'true' : 'false').'">';
				break;

			case 'numtext':
				echo '
				<input type="number" name="p'.$row["id"].'" class="field" placeholder="'.$row['name'].'" value="">';
				break;

			case 'checkbox':
				echo '<input name="p'.$row["id"].'" class="field" placeholder="'.$row['name'].'" id="feedback_p'.$row["id"].'" value="1" type="checkbox" ><label for="feedback_p'.$row["id"].'">'.$row["name"].($row["required"] ? '<span style="color:red;">*</span>' : '').'</label>';
				break;

			case 'select':
				echo '<div class="infofield">'.$row['name'].':</div>
				<select name="p'.$row["id"].'" class="field" placeholder="'.$row['name'].'" class="inpselect">
					<option value="">-</option>';
				foreach ($row["select_array"] as $select)
				{
					echo '<option value="'.$select["id"].'">'.$select["name"].'</option>';
				}
				echo '</select>';
				break;

			case 'multiple':
				echo '';
				foreach ($row["select_array"] as $select)
				{
					echo '<input name="p'.$row["id"].'[]" id="feedback_p'.$select["id"].'[]" value="'.$select["id"].'" type="checkbox"><label for="feedback_p'.$select["id"].'[]">'.$select["name"].'</label><br>';
				}
				break;

			case "attachments":
				echo '';
				echo '<div class="inpattachment"><input type="file" name="attachments'.$row["id"].'[]" class="inpfiles" max="'.$row["max_count_attachments"].'"></div>';
				echo '<div class="inpattachment" style="display:none"><input type="file" name="hide_attachments'.$row["id"].'[]" class="inpfiles" max="'.$row["max_count_attachments"].'"></div>';
				if ($row["attachment_extensions"])
				{
					echo '<div class="attachment_extensions">('.$this->diafan->_('Доступные типы файлов').': '.$row["attachment_extensions"].')</div>';
				}
				break;

			case "images":
				echo '<div class="images"></div>';
				echo '<input type="file" name="images'.$row["id"].'" param_id="'.$row["id"].'" class="inpimages">';
				break;
		}

		if($row["text"])
		{
			echo '<div class="feedback_form_param_text">'.$row["text"].'</div>';
		}

		echo '</div>';

		if($row["type"] != 'title')
		{
			echo '<div class="errors error_p'.$row["id"].'"'.($result["error_p".$row["id"]] ? '>'.$result["error_p".$row["id"]] : ' style="display:none">').'</div>';
		}
	}
}

//Защитный код
echo $result["captcha"];

//Кнопка Отправить
echo '<button type="submit" class="btn btn_order">Отправить</button>
			<button type="button" class="btn btn_close">Отмена</button>';

if($required)
{
	echo '<div class="required_field"><span style="color:red;">*</span> — '.$this->diafan->_('Поля, обязательные для заполнения').'</div>';
}

echo '<div class="privacy_field">'.$this->diafan->_('Отправляя форму, я даю согласие на <a href="%s">обработку персональных данных</a>.', true, BASE_PATH_HREF.'privacy'.ROUTE_END).'</div>';
echo '</form>';
echo '<div class="errors error"'.($result["error"] ? '>'.$result["error"] : ' style="display:none">').'</div>
</div>';