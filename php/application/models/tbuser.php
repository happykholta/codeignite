<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tbuser extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
   public function verifylogin($username,$pass)
    {
        $sql = "select count(*) as Count from tb_login where username=\"".$username."\" and password=\"".$pass."\"";
     
        $recordset= mysql_query($sql);
       
        $result= mysql_fetch_assoc($recordset);
        $count=$result['Count'];
        return $count;
    }

}
