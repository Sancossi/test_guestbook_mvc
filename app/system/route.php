<?php

/**
 * Created by PhpStorm.
 * User: Богорадов Василий
 * Date: 19.02.2017
 * Time: 14:14
 * Класс машрутизатора
 */
class Route
{
    // вместо конфига, папки где храняться наши классы
    private const MODELS_PATH = 'app/models/'; // для моделей
    private const CONTROLLERS_PATH = 'app/controllers/'; // для контроллеров

    /*
     * Функция запуска машрутизации
     */
    static function run()
    {
        // Иницилизируем переменные и значения по-умолчанию
        $controller_name = 'Main';
        $action_name = 'index';

        // Получаем запрос к серверу и разбиваем его, потому как храниться в фармете /controller/action
        $request = explode('/', $_SERVER['REQUEST_URI']);
        // Проверяем есть ли обращение к какому либо контроллеру
        if(!empty($request[1]))
        {
            $controller_name = $request[1];
        }

        // проверяем есть ли обращение к какому либо дейсвию
        if(!empty($request[2]))
        {
            $action_name = $request[2];
        }
        // добавляем префиксы к именам
        $model_name = 'model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;

        // вычисляем название дейсвия
        $action_name = 'action_'.$action_name;//перезаписываем имя дейсвия(далее оно не понадобиться в первозданном виде



        // подхватываем файлы модели, есди существует
        $model_path = Route::MODELS_PATH.$model_name.'.php'; // получаем имя файла и путь к нему
        if(file_exists($model_path))
        {
            include $model_path.'';// Добавил в конце коньектацию чтобы не ругалось IDE + чтобы точно преобразовать к строке
        }
        else
        {
            // кидаем исключение.
            Route::error_404();
        }
        // подхватываем файлы контроллера, если сущетсвуют
        $controller_path = Route::CONTROLLERS_PATH.$controller_name.'.php';
        if(file_exists($controller_path))
        {
            include $controller_path.'';
        }
        else
        {
            Route::error_404();
        }

        // создаем экзепляр контроллера контроллер
        $controller = new $controller_name;

        // вызываем дейсвие контроллера
        if(method_exists($controller, $action_name))
        {
            $controller -> $action_name();
        }
        else
        {
            Route::error_404();
            // кидаем исключение
        }
    }

    private function error_404()
    {

    }
}