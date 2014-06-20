<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tbnews extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
   public function addnews($data)
    {
        $title      =$data['newstitle'];
        $author     =$data['newsauthor'];
        $category   =$data['category'];
        $description=$data['desc'];
        

        $sql = "INSERT INTO tb_news(newstitle,Author,categorey,text)
                                    VALUES ('$title','$author','$category','$description')";
    
        $recordset= mysql_query($sql);
        return $recordset;
    }
   public function getnews($dataid)
   {
       //print_r($dataid);
       $sql = "select * from tb_news where categorey=\"".$dataid."\" ";
        
        
        $recordset= mysql_query($sql);
     
       
       //$result= mysql_fetch_assoc($recordset);
       
       
        while($result=mysql_fetch_assoc($recordset))
        {
            $newresult[]=$result;
           // $newresult['msg']='y';
            
        }
        
        return $newresult;
   }

}
