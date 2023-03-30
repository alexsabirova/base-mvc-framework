<?php

namespace app\controllers;

use core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $test = 'MainTest';
        $this->setMeta('Home page', 'Description...', 'keywords');
    }
}