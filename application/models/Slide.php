<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Slide extends MY_Model {

    /**
     * Table Name and Primary key to perform CRUD operations.
     */
    const DB_TableName = 'slides';
    const DB_TablePK = 'sid';

    
    public $image_dimension = '';
    

} ?>