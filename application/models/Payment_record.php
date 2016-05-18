<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Payment_record extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'payment_records';
    const DB_TablePK = 'pr_id';


    public $amount      =   '';
    public $firstname      =   '';
    public $lastname       =   '';
    public $email          =   '';
    public $phone          =   '';
    public $addressLineOne =   '';
    public $addressLineTwo =   '';
    public $city           =   '';
    public $province       =   '';
    public $zip            =   '';
    public $cardNumber     =   '';
    public $cardHolder     =   '';
    public $expiryMonth    =  '';
    public $expiryYear     =   '';
    public $cvv            =   '';
    

} ?>