<?php

/**
 * Шаблон страницы товара
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


if (!empty($result['img'])) {
    echo '<div class="pics">';

    foreach($result['img'] as $k => $img) {
        $result['img'][$k]['link_medium'] = str_replace("/large/","/shop_medium/",$img['link']);
        
        echo '<a data-id="'.$img['id'].'" class="pics__big" '.($k > 0 ? 'style="display:none"':'').' href="' . BASE_PATH . $img["link"] . '" rel="prettyPhoto[galshop'.$result['id'].']"><img src="' . BASE_PATH . $result['img'][$k]['link_medium'] . '" alt="' . $img["alt"] . '" title="' . $img["title"] . '" class="pics__big__img"></a>
						
    '; }

    if ($result["preview_images"]) {
        foreach ($result["img"] as $img) {
            
            echo '<a href="' . BASE_PATH . $img["link_medium"] . '" data-id="' . $img['id'] . '" class="pics__mini">
						<img src="' . $img["preview"] . '" alt="" class="pics__mini__img">
					</a>';
        }
    }


    echo '</div>';
}

echo '				<!-- |===============| info start |===============| -->
				<div class="info">
					<h2 class="heading">
						'.$result['name'].'
					</h2>
					
					<div class="info__content">
						'.$result['text'].'
					</div>'
					 . (!empty($result['rating']) ? '<div class="rating">' . $result['rating'] . '</div>' : '')
					
					.(!empty($result['article']) ? '<span class="info__b">'.$this->diafan->_('Артикул').'</span>: '.$result["article"].'</span><br>' : '') 
                                        .(!empty($result['brand']) ? '<span class="info__b">'.$this->diafan->_('Производитель').'</span>: <a href="'.BASE_PATH_HREF.$result["brand"]["link"].'">'.$result["brand"]["name"].'</a><br>' : '')
					.(!empty($result['param']) ? $this->get('param', 'shop', array("rows" => $result["param"], "id" => $result["id"])) : '')
                                        .$this->get('buy_form', 'shop', array("row" => $result, "result" => $result))
                                        .$this->htmleditor('<insert name="show_social_links">').'
				</div>
				<!-- |===============| info end |===============| -->
				
				<div class="aside-info">
					'.$this->htmleditor('<insert name="show_block" module="site" id="7">').'
				</div>';

