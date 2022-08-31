<!--All Employee main data-->
<?php 
$id  = $_GET['id'];
$View  = "SELECT a.e_id,a.first_name,a.middle_name,a.last_name,a.suffix,a.gender,a.birth_date,b.addres, stat,email,contact,r.religion,f.education,g.course,e.emp_type,c.department,d.job,salary,cse,cse_type,hired 
FROM employee a 
JOIN addres b ON a.addres = b.a_id 
LEFT JOIN department c on a.department = c.d_id 
LEFT JOIN job d on a.job_title = d.j_id 
LEFT JOIN employee_type e on a.employee_type = e.e_id 
LEFT JOIN religion r on a.religion = r.r_id 
LEFT JOIN education f on a.educational_attainment = f.education 
LEFT JOIN course g on a.course = g.course WHERE a.e_id = $id";
$qry = $con->prepare($View);
$qry->execute();
$qry->bind_result($e_id,$first_name,$middle_name,$last_name,$suffix,$gender,$bdate,$addres,$stat,$email,$contact,$religion,$education,$course,$emp_type,$department,$job,$salary,$cse,$cse_type,$hired);
while($qry->fetch()){
$datelog = date("m/d/Y h:i:sa");}
?>

<!--Employee Deductions-->
<?php 
$id  = $_GET['id'];
$Deductions  = "SELECT d_id,emp_id,gsis_prem,gsis_policy,hdmf_prem,hdmf_policy,philhealth,tax,mp2 FROM deductions where emp_id = $id"; 
$qry = $con->prepare($Deductions);
$qry->execute();
$qry->bind_result($d_id,$emp_id,$gsis_prem,$gsis_policy,$hdmf_prem,$hdmf_policy,$philhealth,$tax,$mp2);
while($qry->fetch()){
$datelog = date("m/d/Y h:i:sa");}
?>