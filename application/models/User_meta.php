<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_meta extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'users_meta';
    const DB_TablePK = 'um_id';
    
    public $fk_uid = '';


    public $um_key = '';
    public $um_title = '';
    public $um_value= '';

} ?>