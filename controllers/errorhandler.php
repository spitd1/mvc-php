<?php

class ErrorHandler extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo 'This is an error!';

        $this->view->msg = 'This page doesnt exists';
        $this->view->render('errorhandler/index');
    }
}