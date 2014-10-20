<?php

class Application_Form_Index extends Zend_Form
{

    public function init()
    {
        // SET HTTP METHOD
        $this->setMethod('POST');
        
        // ADD ELEMENTS
        $this->addElement('text', 'first_name', array(
        	'label'		=> 'First Name',));
        
        $this->addElement('text','last_name', array(
        	'label'		=> 'Last Name'));
        
        $this->addElement('text','email', array(
        	'label' 	=> 'Email Address',
        	'required'	=> true,
        	'filters'	=> array('StringTrim'),
        	'validators'	=> array('EmailAddress')
        	)); 
        	
        $this->addElement('text', 'address', array(
        	'label'		=> 'Address'));
        
        $this->addElement('text', 'state_code', array(
        	'label'		=> 'Two Letter State Code'));
        	
        $this->addElement('text', 'zip_postal', array(
        	'label'		=> 'Zip Code'));
        	
        
        $this->addElement('text', 'username', array(
        	'label'		=> 'Choose your username'));
        	
        	
        $this->addElement('text', 'password', array(
        	'label'		=> 'Choose a password'));
        	
        $this->addElement(new Zend_Form_Element_MultiCheckbox('interests', array(
   			 'multiOptions' => array(
    	    'backpack_cal' => 'Backpack Cal',
   		 	'cycle_cal' => 'Cycle California',
        	'nature_watch' => 'Nature Watch',
        	'california_calm' => 'California Calm',
        	'desert_to_sea' => 'From Desert to Sea',
        	'snowboard_cali' => 'Snowboard Cali',
        	'california_hotsprings' => 'California Hotsprings',
        	'kids_california' => 'Kids California',
        	'taste_of_california' => 'Taste of California',)
        	)
        	)
    );
        	
        $this->addElement(new Zend_Form_Element_Radio('num_tours', array(
        	'label'	=> 'How many tours have you completed?',
   			 'multiOptions' => array(
    	    '0'		=> 'none',
    	    '1-3'	=> '1 - 3',
    	    '4-6'	=> '4 - 6',
    	    '7+'	=> '7+',)
    	    )
    	    )
    );
        	
        $this->addElement('textarea', 'bio', array(
        	'label'		=> 'Bio',
        	'width'		=> '150',
        	'height'	=> '100'));
        	
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Join Now',
        ));
 
        // And finally add some CSRF protection
        $this->addElement('hash', 'csrf', array(
            'ignore' => true,
        ));
    }


}

