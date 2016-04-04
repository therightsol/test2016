<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Email_setup extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'notifications';
    const DB_TablePK = 'nid';
    

    public $email_address = '';
    public $email_password= '';
    public $email_smtp= '';
    public $email_port = '';
    public $email_host = '';

} ?>