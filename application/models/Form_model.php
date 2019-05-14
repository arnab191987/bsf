<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Form_model extends MY_Model {

    protected $tableName = 'form'; /* This is the table name */
    public $primaryKey = 'form_id';  /* This is the table primary key */

    public function __construct() {
        parent::__construct();
    }

  

}

?>
