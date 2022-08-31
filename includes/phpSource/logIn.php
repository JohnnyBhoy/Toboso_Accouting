<?php
if(isset($_POST["login"])){
  				require_once "includes/config.php";
				//create connection
  				 $cn= new mysqli(H, U, P, D);
  				 $email=$_POST["email"];
 				 $upass=$_POST["pass"];

				//sql statement
				$sql="SELECT a_id,email,username FROM admin WHERE email=? AND userPassword=?";
				//PREPARE THE QUERY
				$qry=$cn->prepare($sql);
				//bind the parameters
				$qry->bind_param("ss",$email,$upass);
				//execute the query
				$qry->execute();
				$qry->bind_result($a_id,$email,$username);
				$qry->store_result();
				$qry->fetch();

				if($qry->num_rows()==1 && $email!="admin@gmail.com"){
   				 $_SESSION["a_id"]=$a_id;
 				 echo"<script language = 'javascript'>
				swal({title: 'WELCOME',
				text:'".$username."',
                type : 'success',
                showConfirmButton: false,
                timer: 2000,
                },
                function(){
                setTimeout(function(){
                location = 'Employee/index';
                });
                });
				</script>";
				} 
				else if($qry->num_rows()==1 && $email=="admin@gmail.com"){
   				 $_SESSION["a_id"]=$a_id;
 				 echo"<script language = 'javascript'>
				swal({title: 'WELCOME',
				text:'".$username."',
                type : 'success',
                showConfirmButton: false,
                timer: 1500,
                },
                function(){
                setTimeout(function(){
                location = 'Home/index';
                });
                });
				</script>";
				} 
				else {echo "<script language = 'javascript'>
				        swal({title: 'Failed To Login!!!',
                text: 'Incorrect email or password',
                type : 'error',
                showConfirmButton: false,
                timer: 2000,
                },
                function(){
                setTimeout(function(){
                location = 'index';
                });
                });
				</script>";
}  
}?>