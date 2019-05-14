<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Month_model extends MY_Model {

    protected $tableName = 'month'; /* This is the table name */
    public $primaryKey = 'em_id';  /* This is the table primary key */

    public function __construct() {
        parent::__construct();
    }

  

}

?>