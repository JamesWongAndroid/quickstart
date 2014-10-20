<?php

class Application_Model_MailListMapper
{
	// SAVE THE TABLE IN PRIVATE VAR
    protected $_dbTable;
 
 	// GETTER/SETTER FOR TABLE
    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }
 
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_MailList');
        }
        return $this->_dbTable;
    }
 
 	// SAVE() METHOD TO SAVE TO DB
    public function save(Application_Model_MailList $maillist)
    {
        $data = array(
            'first_name' => $maillist->getFirst_Name(),
            'last_name' => $maillist->getLast_Name(),
            'email'   => $maillist->getEmail(),
            'address' => $maillist->getAddress(),
            'state_code' => $maillist->getState_Code(),
            'zip_postal' => $maillist->getZip_Postal(),
            'username' => $maillist->getUsername(),
            'password' => $maillist->getPassword(),
            'bio' => $maillist->getBio(),
            'interests' => $maillist->getInterests(),
            'num_tours' => $maillist->getNum_Tours()
        );
 
        if (null === ($id = $maillist->getUserid())) {
            unset($data['userid']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('userid = ?' => $id));
        }
    }
    
    // TO-DO: IMPLEMENT find() method to get one object by id
    
    // TO-DO: IMPLEMENT fetchAll method to get all records
}
