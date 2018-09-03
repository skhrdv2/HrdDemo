<?php
include_once('../lib/config.inc.php');
$Db = new MySqlConn; 
if($_POST['req']=='req'){
              
$sql="SELECT * FROM hrd_person ps";

                $sql = $Db->query($sql, '');
               $data = array();
        foreach ($sql as $row ) {
            $data[] = $row ;
        }
                $response = array(
      
        "data" => $data
    );	
                echo json_encode($response);   
}       
     ?>
