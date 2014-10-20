<?php

class Application_Model_MailList
{
// PROTECTED VARS STORE ACTUAL DATA - GET/SET ONLY EXPOSED THROUGH METHODS
	protected $_userid;
	protected $_first_name;
	protected $_last_name;
	protected $_email;
	protected $_address;
	protected $_state_code;
	protected $_zip_postal;
	protected $_username;
	protected $_password;
	protected $_bio;
	protected $_interests;
	protected $_num_tours;

 	// CONSTRUCTOR ALLOWS FOR SETTING OF ALL PROPS
    public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }
 
 	// DEFAULT SETTER
    public function __set($name, $value)
    {
        $method = 'set' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid maillist property');
        }
        $this->$method($value);
    }
 
 	// DEFAULT GETTER
    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid maillist property');
        }
        return $this->$method();
    }
    
 	// FUNCTION TO ALLOW FOR SETTING PROPERTIES FROM ARRAY
    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }
    
    // ALL THE GETTERS AND SETTERS
    
    public function setUserid($id)
    {
    	$this->_userid = (int) $id;
    }
    
    public function getUserid()
    {
    	return $this->_userid;
    }
    
    public function setFirst_Name($text)
    {
    	$this->_first_name = (string) $text;
    }
    
    public function getFirst_Name()
    {
    	return $this->_first_name;
    }
    
    public function setLast_Name($text)
    {
    	$this->_last_name = (string) $text;
    }
    
    public function getLast_Name()
    {
    	return $this->_last_name;
    }
    
    public function setEmail($text)
    {
    	$this->_email = (string) $text;
    }
    
    public function getEmail()
    {
    	return $this->_email;
    }
    
    public function setAddress($text)
    {
    	$this->_address = (string) $text;
    }
    
    public function getAddress()
    {
    	return $this->_address;
    }
    
    public function setState_Code($text)
    {
    	$this->_state_code = (string) $text;
    }
    
    public function getState_Code()
    {
    	return $this->_state_code;
    }
    
    public function setZip_Postal($text)
    {
    	$this->_zip_postal = (string) $text;
    }
    
    public function getZip_Postal()
    {
    	return $this->_zip_postal;
    }
    
    public function setUsername($text)
    {
    	$this->_username = (string) $text;
    }
    
    public function getUsername()
    {
    	return $this->_username;
    }
    
    public function setPassword($text)
    {
    	$this->_password = (string) $text;
    }
    
    public function getPassword()
    {
    	return $this->_password;
    }
    
    public function setBio($text)
    {
    	$this->_bio = (string) $text;
    }
    
    public function getBio()
    {
    	return $this->_bio;
    }
    
    public function setInterests($text)
    {
    	$this->_interests = (string) $text;
    }
    
    public function getInterests()
    {
    	return $this->_interests;
    }
    
    public function setNum_Tours($text)
    {
    	$this->_num_tours = (string) $text;
    }
    
    public function getNum_Tours()
    {
    	return $this->_num_tours;
    }

}

