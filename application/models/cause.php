<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cause extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'causes';
    const DB_TablePK = 'cause_id';
    
    public $cause_title = '';
    
    
    public $cause_long_description = '';
    public $cause_short_description= '';
    public $percent_completed= '';
    public $number_of_donators = '';
    public $total_required_amount = '';
    public $amount_collected = '';
    public $amount_from_sponsors = '';
    public $amount_from_donors = '';
    public $amount_in_progress = '';
    public $cause_insert_date= '';
     public $cause_update_date = '';
    public $cause_last_date = '';
    public $cause_image_path= '';
    

} ?>