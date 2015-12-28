<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 28.12.15
 * Time: 14:26
 */
namespace Users\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        //При домашней странице
        $view = new ViewModel();
        return $view;
    }
    public function registerAction()
    {
        //Если пользователь совершает действие регистрации
        $view = new ViewModel();
        //Выводится шаблон регистрации
        $view->setTemplate('users/index/new-user');
        return $view;
    }
    public function loginAction()
    {
        //Если пользователь совершает действие авторизации
        $view = new ViewModel();
        //Вывод шаблона авторизации
        $view->setTemplate('users/index/login');
        return $view;
    }
}