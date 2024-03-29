<?php

/**
 * Редактор CSS
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2014 OOO «Диафан» (http://diafan.ru)
 */
if (!defined('DIAFAN')) {
    include(dirname(dirname(dirname(__FILE__))) . '/includes/404.php');
}

class Csseditor_admin extends Frame_admin {

    private function file_check($file) {
        $result = false;

        try {
            File::check_file($file);
            $result = File::is_writable($file);
        } catch (File_exception $ex) {
            
        }

        //return (file_exists(ABSOLUTE_PATH.$file) && is_writable(ABSOLUTE_PATH.$file));

        return $result;
    }

    private function get_info() {
        $info = array(
            'file' => Custom::path('css' . DIRECTORY_SEPARATOR . 'colors.css'),
            'writeable' => false
        );


        $name = DB::query_result("SELECT name FROM {update_custom} WHERE current='1'");
        if(!$name) $name = DB::query_result("SELECT name FROM {custom} WHERE current='1'");
        
        if ($name) {
            $info['file'] = DIRECTORY_SEPARATOR . 'custom' . DIRECTORY_SEPARATOR . $name . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'colors.css';
        }

        $info['writeable'] = $this->file_check($info['file']);

        return $info;
    }

    public function show() {
        $info = $this->get_info();

        if (false === $info['writeable']) {
            echo '<p>Модуль предназначен для простого редактирования файла стилей, отвечающих за цвета. Файл должен называться <strong>' . $info['file'] . '</strong> и находиться в текущем каталоге активной темы.'
            . ' Вынесите в этот файл некоторые цвета, которые необходимо быстро править из административной части сайта.</p>'
            . '<p>Формат записей:<pre>
    .class_name { /*# название поля */
        color:#000000;
    }
                   </pre></p><p>Для редактирования будут доступны только те классы, у которых проставлен специальный комментарий и свойства <i>color, background, border, box-shadow, outline</i> и все их составляющие.<br>
                   Формат цветовых значений RGB: <strong>#000000</strong></p>
                   <p>Не забудьте добавить <strong>colors.css</strong> в шаблон: <pre> &lt;insert name="show_css" files="style.css, colors.css"&gt;</pre></p>';
            return false;
        }

        if (!empty($_POST[CSSEditor::FIELD_NAME])) {
            if (!empty($_POST[CSSEditor::FIELD_NAME]))
                File::save_file($_POST[CSSEditor::FIELD_NAME], $info['file']);
        }

        $editor = new CSSEditor($info['file']);
        echo '<p>Редактирование файла текущей темы <strong>' . str_replace(ABSOLUTE_PATH, '', $info['file']) . '</strong></p><form method="POST" action="">' .
        $editor->show() .
        '<input type="submit" value="' . $this->diafan->_('Сохранить', false) . '"></form>';
    }

}

class CSSEditor {

    const FIELD_NAME = 'csseditor_content';

    private $content;

    public function __construct($fileName = null) {

        if ($fileName) {
            $this->content = file_get_contents(ABSOLUTE_PATH . $fileName);
        }
    }

    public function show() {
        return '<style type="text/css">
                #csseditor_parser .name {
                    font-weight:bold;
                    padding-bottom:10px;
                    display:block;
                }
                
#csseditor_parser > div > table td {
padding:5px;
}

#csseditor_parser > div > table td:first-child {
width:100px;
}


                
#csseditor_parser > div {
    margin:10px 0 20px;
}
           
	    </style>
            <script type="text/javascript" src="'.BASE_PATH.Custom::path('modules/csseditor/admin/js/jscolor/jscolor.js').'"></script>
            <textarea style="display:none" id="' . self::FIELD_NAME . '" name="' . self::FIELD_NAME . '">' . $this->content . '</textarea>
            <div id="csseditor_parser"></div>
	</div>';
    }

}
