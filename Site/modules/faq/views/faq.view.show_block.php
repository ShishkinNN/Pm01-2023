<?php

/**
 * Шаблон блока вопросов и ответов
 * 
 * Шаблонный тег <insert name="show_block" module="faq" [count="количество"]
 * [cat_id="категория"] [site_id="страница_с_прикрепленным_модулем"]
 * [sort="порядок_вывода"] [often="часто_задаваемые_вопросы"]
 * [only_module="только_на_странице_модуля"] [template="шаблон"]>:
 * блок вопросов и ответов
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

if (!empty($result['name']))
    echo '<h2 class="heading">' . $result['name'] . '</h2>';

echo '<div class="box__crop">
						<ul class="box__list">';
                        $i=0;
                        while($i < count($result['rows'])) {
                            $j=$i; $i+=2;

                            echo '<li class="box__item">';

                            for(;$j<$i;$j++) {
                                if(!array_key_exists($j, $result['rows'])) break;

                                $row = $result['rows'][$j];
                                echo '<div class="box__item--item">
                                <a href="' . BASE_PATH_HREF . $row["link"] . '" class="content">
                                    ' . $row['anons'] . '
                                </a>'
                                . (!empty($row['rating']) ? '<div class="rating">' . $row['rating'] . '</div>' : '')
                                . '<div class="box__item__info">'
                                . (!empty($row['name']) ? $row['name'] . ' ' : '')
                                . (!empty($row['date']) ? $row['date'] : '')
                                .'</div></div>';
                            }
                            echo '</li>';

                        }
                       
                                                    
                                                    /*

foreach ($result['rows'] as $row) {

    echo '<li class="box__item">
								<a href="' . BASE_PATH_HREF . $row["link"] . '" class="content">
									' . $row['anons'] . '
								</a>'
    . (!empty($row['rating']) ? '<div class="rating">' . $row['rating'] . '</div>' : '')
    . '<div class="box__item__info">'
    . (!empty($row['name']) ? $row['name'] . ' ' : '')
    . (!empty($row['date']) ? $row['date'] : '')
    . '</div>
							</li>';
}*/
echo '</ul>
					</div>';

