<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tbdemouser extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
   public function display()
    {
        $sql = "select * from tb_info ";
     
        $recordset= mysql_query($sql);
        $result= mysql_fetch_assoc($recordset);
        
        return $result;
    }

}
