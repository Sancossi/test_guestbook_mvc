<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2017
 * Time: 14:01
 */

class View
{


    const VIEWS_PATH = 'app/views/';

    /**
     * @param $content_view виды для отображения содержимого страницы
     * @param $template_view общий шаблон
     * @param null $data данные для отображения
     */
    public function generate($content_view, $template_view, $data = null)
    {
        include self::VIEWS_PATH.$template_view."";
    }
}

