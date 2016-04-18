<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Campaign_meta extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'campaign_meta';
    const DB_TablePK = 'cmp_id';
    
    public $campaign_id = '';
    public $cmp_key = '';
    public $cmp_value = '';
}
