   <!-- Add pond script -->
   <?php

            /**Functions to sweet alert succes-**/
            function addSwal($name){
                echo"<script language = 'javascript'>
                swal({title: '".$name." added',
                type : 'success',
                showConfirmButton: false,
                timer: 1500,
                },
                function(){
                setTimeout(function(){
                location = 'index';
                });
                });
                </script>";
            }

             /**Functions to sweet alert failed-**/
            function failedSwal($name){
                echo"<script language = 'javascript'>
                swal({title: '".$name." Failed',
                type : 'warning',
                showConfirmButton: false,
                timer: 1500,
                },
                function(){
                setTimeout(function(){
                location = 'index';
                });
                });
                </script>";
            }


              /**Script to Add Employee**/
              if(isset($_POST["addEmp"])){
                $fname=$_POST["fname"];            
                $mname=$_POST["mname"];            
                $lname=$_POST["lname"];            
                $suffix=$_POST["suffix"];            
                $gender=$_POST["gender"];            
                $bdate=$_POST["bdate"];            
                $addres=$_POST["addres"];            
                $stat=$_POST["stat"];            
                $email=$_POST["email"];            
                $contact=$_POST["contact"];            
                $religion=$_POST["religion"];            
                $education=$_POST["education"];            
                $course=$_POST["course"];            
                $emp_type=$_POST["emp_type"];            
                $department=$_POST["department"];            
                $job=$_POST["job"];            
                $salary=$_POST["salary"];            
                $cse=$_POST["cse"];            
                $cse_type=$_POST["cse_type"];            
                $hired=$_POST["hired"];            
               //sql statement
              $Employee = "INSERT INTO employee (first_name,middle_name,last_name,suffix,gender,birth_date,addres,stat,email,contact,religion,educational_attainment,course,employee_type,department,job_title,salary,cse,cse_type,hired) 
              values('$fname','$mname','$lname','$suffix','$gender','$bdate','$addres','$stat','$email','$contact','$religion','$education','$course','$emp_type','$department','$job','$salary','$cse','$cse_type','$hired')";
              $qry=$con->prepare($Employee);
              
              // condition for success or fail
              if($qry->execute()){;
               addSwal('Employee');
              }
              else{
               failedSwal('Employee');
              }
            }

              /**Script to Add Religion**/
              if(isset($_POST["addReligions"])){
                 $religions=$_POST["religions"];            
                //sql statement
               $add_religion = "INSERT INTO religion (religion) 
               values('$religions')";
               $qry=$con->prepare($add_religion);
               
               // condition for success or fail
               if($qry->execute()){;
                addSwal('Religion');
               }
               else{
                failedSwal('Religion');
               }
             }

              /**Script to Add Educational Attainment**/
              if(isset($_POST["addEducations"])){
                $educations=$_POST["educations"];            
               //sql statement
              $add_education = "INSERT INTO education (education) 
              values('$educations')";
              $qry=$con->prepare($add_education);
              
              // condition for success or fail
              if($qry->execute()){;
                addSwal('Attainment');
              }
              else{
                failedSwal('Attainment');
               }
            }


              /**Script to Add Courses / Certificates**/
              if(isset($_POST["addCourses"])){
                $course=$_POST["courses"];            
               //sql statement
              $courses = "INSERT INTO course (course) 
              values('$course')";
              $qry=$con->prepare($courses);
              
              // condition for success or fail
              if($qry->execute()){;
                addSwal('Course');
              }
              else{
                failedSwal('Course');
               }
            }

        /**Script to Add Address**/
        if(isset($_POST["addAddress"])){
            $addres=$_POST["addresses"];
            
            //sql statement
               $add_Address="INSERT INTO addres (addres) 
               values('$addres')";
               $qry=$con->prepare($add_Address);
               
               // condition for success or fail
               if($qry->execute()){;
                addSwal('Address');
               }
               else{
                failedSwal('Address');
               }
             }

        /**Script to Add Employee Type**/
        if(isset($_POST["addEmp_Type"])){
            $empType=$_POST["emp_Type"];
            
            //sql statement
               $add_Employee_Type="INSERT INTO employee_type (emp_type) 
               values('$empType')";
               $qry=$con->prepare($add_Employee_Type);
               
               // condition for success or fail
               if($qry->execute()){;
                addSwal('Employee Type');
               }
               else{
                failedSwal('Employee Type');
               }
             }

        /**Script to Add Department**/
        if(isset($_POST["addDepartment"])){
            $departments=$_POST["departments"];
            
            //sql statement
               $Departments="INSERT INTO department (department) 
               values('$departments')";
               $qry=$con->prepare($Departments);
               
               // condition for success or fail
               if($qry->execute()){;
                addSwal('Department');
               }
               else{
                failedSwal('Department');
               }
             }

        /**Script to Add Job**/
        if(isset($_POST["addJobs"])){
            $jobs=$_POST["jobs"];
            
            //sql statement
               $Job="INSERT INTO job (job) 
               values('$jobs')";
               $qry=$con->prepare($Job);
               
               // condition for success or fail
               if($qry->execute()){;
                 addSwal('Job Title');
               }
               else{
                failedSwal('Job Title');
               }
             }

        ?>


   