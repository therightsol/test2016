<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Donations_meta extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'donations_meta';
    const DB_TablePK = 'dm_id';
    
    public $donation_id = '';
    public $dm_key = '';
    public $dm_value = '';
}
