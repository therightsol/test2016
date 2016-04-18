<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Causes_meta extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'Causes_meta';
    const DB_TablePK = 'cm_id';
    
    public $cause_id = '';
    public $cm_key = '';
    public $cm_value = '';
}
