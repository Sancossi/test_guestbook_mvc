<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2017
 * Time: 14:00
 */
// Подхватыем суперклассы
require_once 'system/model.php';
require_once 'system/controller.php';
require_once 'system/view.php';
// Подхватыем класс для маршрутизации
require_once 'system/route.php';
// Запускаем машрутизацию
Route::run();