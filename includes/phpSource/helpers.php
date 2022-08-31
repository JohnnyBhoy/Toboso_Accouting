<!--Total Employee-->
<?php  
  $totalEmployee= "SELECT count(first_name) FROM employee";
  $qry= $con->prepare($totalEmployee);
  $qry->execute();
  $qry->bind_result($totalEmployee);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>

<!--Total Male Employee-->
<?php  
  $maleEmployee= "SELECT count(gender) FROM employee where gender = 'Male'";
  $qry= $con->prepare($maleEmployee);
  $qry->execute();
  $qry->bind_result($maleEmployee);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>

<!--Total female Employee-->
<?php  
  $femaleEmployee= "SELECT count(gender) FROM employee where gender  = 'Female'";
  $qry= $con->prepare($femaleEmployee);
  $qry->execute();
  $qry->bind_result($femaleEmployee);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>

<!--Total CSE Passer-->
<?php  
  $cse= "SELECT count(cse) FROM employee where cse  = 'Yes'";
  $qry= $con->prepare($cse);
  $qry->execute();
  $qry->bind_result($cse);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>

<!--Total cse professional passer Employee-->
<?php  
  $cse_a = "SELECT count(cse_type) FROM employee where cse_type  = 'Professional'";
  $qry= $con->prepare($cse_a);
  $qry->execute();
  $qry->bind_result($cse_a);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>


<!--Total cse sub professional passer Employee-->
<?php  
  $cse_b = "SELECT count(cse_type) FROM employee where cse_type  = 'Sub-Professional'";
  $qry= $con->prepare($cse_b);
  $qry->execute();
  $qry->bind_result($cse_b);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>

<!--Total loan-->
<?php  
  $loan_type= "SELECT count(loan_type) FROM loan_type";
  $qry= $con->prepare($loan_type);
  $qry->execute();
  $qry->bind_result($loan_type);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>

<!--Government Loan -->
<?php
$loan_a = "SELECT count(loan_type) FROM loan_type where loan_type='Government Loan'";
$qry = $con->prepare($loan_a);
$qry->execute();
$qry->bind_result($loan_a);
while($qry->fetch()){
$datelog = date("m/d/Y h:i:sa");}
?>

<!--Private Loan -->
<?php
$loan_b= "SELECT count(loan_type) FROM loan_type where loan_type='Bank Loan'";
$qry = $con->prepare($loan_b);
$qry->execute();
$qry->bind_result($loan_b);
while($qry->fetch()){
$datelog = date("m/d/Y h:i:sa");}
?>


<!--**Count the department-->
<?php  
  $dept= "SELECT count(department) FROM department";
  $qry= $con->prepare($dept);
  $qry->execute();
  $qry->bind_result($dept);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>
<!--**Count the pond available-->

