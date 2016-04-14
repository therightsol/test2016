<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Donation extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'donation_ads';
    const DB_TablePK = 'donation_id';
    
    public $donation_title = '';
    
    
    public $donation_long_description = '';
    public $donation_short_description= '';
    public $number_of_donators= '';
    public $total_required_amount = '';
    public $amount_collected = '';
   
    public $amount_from_sponsors = '';
    public $amount_from_donors = '';
    public $amount_in_progress = '';
    public $donation_insert_date= '';
     public $donation_update_date = '';
    public $donation_last_date = '';
    public $donation_image_path= '';
    public $is_approved= '';
    

} ?>