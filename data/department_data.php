<?php
include_once('../lib/config.inc.php');
$Db = new MySqlConn;

if(isset($_GET['show_department'])){  //แสดงจังหวัดทั้งหมดก่อน
$sql="SELECT * FROM hrd_department";
$result=$Db->query($sql);
   //วนลูปแสดงข้อมูลที่ได้ เก็บไว้ในตัวแปร $row
   foreach($result as $row) {
                
    //เก็บข้อมูลที่ได้ไว้ในตัวแปร Array 
    $json_result[] = [
        'id'=>$row['department_id'],
		'name'=>$row['department_name'],
		
    ];
   
   }
   echo json_encode($json_result);
}

	if(isset($_GET['show_department_sub'])){

		//กำหนดให้ตัวแปร $province_id มีค่าเท่ากับ $_GET['province_id]
		$person_id = $_GET['person_id'];
		
		//คำสั่ง SQL เลือก AMPHUR_ID และ  AMPHUR_NAME ที่มี PROVINCE_ID เท่ากับ $province_id
		$sql = "SELECT ds.* FROM hrd_person ps 
		inner join hrd_department_sub ds ON ds.department_id =ps.department_id 
		WHERE ps.person_id =  '".$person_id."'
		
		";
		
		//ประมวณผลคำสั่ง SQL
		$result = $Db->query($sql);
            foreach($result as $row) {
				
				//เก็บข้อมูลที่ได้ไว้ในตัวแปร Array 
				$json_result[] = [
					'id'=>$row['department_sub_id'],
					'name'=>$row['department_sub_name'],
				];
        } 
        echo json_encode($json_result);
	}

