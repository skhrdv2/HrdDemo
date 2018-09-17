<?php
include_once('../lib/config.inc.php');
$Db = new MySqlConn; 
if($_POST['req']=='req'){
              
$sql="SELECT
DATE_FORMAT(DATE_ADD(hpd.position_date,INTERVAL 543 YEAR),'%d/%m/%Y') as position_date,
hp.position_name,
hpd.position_number,
hlt.level_type_name,
hpd.position_advance,
hpd.position_salary,
hpd.position_detail,
hd.department_name,
hds.department_sub_name
from hrd_position_data hpd
LEFT OUTER JOIN hrd_position hp on hp.position_id=hpd.position_id
LEFT OUTER JOIN hrd_level_type hlt on hlt.level_type_id=hpd.level_type_id
LEFT OUTER JOIN hrd_department hd on hd.department_id=hpd.department_id
LEFT OUTER JOIN hrd_department_sub hds on hds.department_sub_id=hpd.department_sub_id
where hpd.person_id='".$_POST['person_id'] ."' ORDER BY hpd.position_date DESC";

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
