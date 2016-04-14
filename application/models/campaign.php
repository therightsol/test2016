<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Campaign extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'campaign_ads';
    const DB_TablePK = 'campaign_id';
    
    public $campaign_title = ''; 
    public $campaign_long_description = '';
    public $campaign_short_description= '';
    public $campaign_insert_date= '';
    public $campaign_update_date = '';
    public $campaign_last_date = '';
    public $campaign_image_path = '';
    
}
