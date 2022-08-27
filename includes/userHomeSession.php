  <?php
  $a=$_SESSION["a_id"];
  $id=isset($_GET["a_id"])?$_GET ["a_id"]:"";
  $con = new mysqli (H , U , P , D);  
  $sql= "SELECT username FROM admin where a_id=$a";
  $qry= $con->prepare($sql);
  $qry->execute();
  $qry->bind_result($username);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
  ?>