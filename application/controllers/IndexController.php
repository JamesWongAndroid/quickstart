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
        $request = $this->getRequest();
    	$form = new Application_Form_Index();

    	if ($request->isPost()) {
    		if ($form->isValid($request->getPost())) {
    			$maillist = new Application_Model_MailList($form->getValues());
    			$mapper = new Application_Model_MailListMapper();
    			$mapper->save($maillist);

    			$this->_helper->redirector('I did it!');
    		} 
    	}

        $this->view->form = $form;
    }


}

