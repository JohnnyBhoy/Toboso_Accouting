<?php 
$id  = $_GET['id'];
$View  = "SELECT e_id,first_name,middle_name,last_name,suffix,gender,birth_date,addres,stat,email,contact,religion,educational_attainment,course,employee_type,department,job_title,salary,cse,cse_type,hired FROM employee WHERE e_id = $id";
$qry = $con->prepare($View);
$qry->execute();
$qry->bind_result($e_id,$first_name,$middle_name,$last_name,$suffix,$gender,$bdate,$addres,$stat,$email,$contact,$religion,$education,$course,$emp_type,$department,$job,$salary,$cse,$cse_type,$hired);
while($qry->fetch()){
$datelog = date("m/d/Y h:i:sa");}
?>