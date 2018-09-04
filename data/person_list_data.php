<?php
include_once('../lib/config.inc.php');
$Db = new MySqlConn; 
if($_POST['req']=='req'){
              
$sql="SELECT ps.*,pst.position_name,dp.department_name,ds.department_sub_name,pn.prename_name
 FROM hrd_person ps 
      LEFT OUTEr JOIN hrd_prename pn ON pn.prename_id = ps.prename_id  
      LEFT OUTER JOIN hrd_position pst ON pst.position_id = ps.position_id
      LEFT OUTER JOIN hrd_department dp ON dp.department_id = ps.department_id
      LEFT OUTER JOIN hrd_department_sub ds ON ds.department_sub_id = ps.department_sub_id
      
";

                $sql = $Db->query($sql,'');
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
