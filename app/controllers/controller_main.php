<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2017
 * Time: 16:33
 */
class Controller_Main extends Controller
{
    function action_index()
    {
       $this->view->generate('main_view.php', 'template_view.php');
    }
}