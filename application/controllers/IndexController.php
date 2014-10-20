<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    	$form = new Application_Form_Index();
        $this->view->form = $form;
    }


}

