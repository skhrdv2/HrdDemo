
<?php
include_once('../lib/config.inc.php');
$Db = new MySqlConn;
$sql="SELECT * FROM hrd_person WHERE person_id='".$_POST['person_id']."'";
$result=$Db->query($sql);
$a_data=array();
foreach ($result as $row){
       array_push($a_data,$row);	
       
   }
echo json_encode($row);
