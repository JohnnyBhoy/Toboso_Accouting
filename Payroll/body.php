<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"">
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <button style="margin-top:2%;margin-bottom:2%" class="btn btn-xs btn-primary">
            <i class="fas fa-print"></i> 1 - 15 days
          </button>
          <i class="fas fa-arrow-right"></i>
          <button style="margin-top:2%;margin-bottom:2%" class="btn btn-xs btn-primary">
            <i class="fas fa-print"></i> 16 - 31 days
          </button>
          <i class="fas fa-arrow-right"></i>
          <button style="margin-top:2%;margin-bottom:2%" class="btn btn-xs btn-primary">
            <i class="fas fa-print"></i> 1 - 31 days
          </button>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th >Name</th>
                    <th>Basic Pay</th>
                    <th>Total Deduction</th>
                    <th>Net Pay</th>
                    <th>Position</th>
                    <th>Period</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <!-- Show employee-->
                       <?php
                        $Employee = "SELECT a.e_id,a.first_name,a.middle_name,a.last_name,a.suffix,a.birth_date,b.addres,c.department,d.job,e.emp_type FROM employee a
                        JOIN addres b ON a.addres = b.a_id 
                        LEFT JOIN department c on a.department = c.d_id 
                        LEFT JOIN job d on a.job_title = d.j_id
                        LEFT JOIN employee_type e on a.employee_type = e.e_id
                        ORDER BY last_name ASC";
                        $result = mysqli_query($con, $Employee);
                        if (mysqli_num_rows($result)> 0 ) 
                        {
                           while($row = mysqli_fetch_assoc($result)) {
                             echo ' 
                             <tr><td>'.$row['last_name'],' ',$row['first_name'],' ,', $row['middle_name'],$row['suffix'].'</td>  
                             <td>23,000.00</td>  
                             <td>2,532.00</td>  
                             <td>20,468.00</td>  
                             <td>'.$row['job'].'</td>  
                             <td> 12-01-2022 </td>  
                             <td><a href="ViewEmployee?id='.$row['e_id'].'">
                             <button class="btn btn-xs btn-info" style="margin-left:5%" ><i class="fa fa-xl fa-eye"></i></button></a>
                             <a href="ViewEmployee?id='.$row['e_id'].'">
                             <button class="btn btn-xs btn-primary" style="margin-left:5%"  ><i class="fa fa-xl fa-arrow-down"></i></button></a>
                             <button  onClick="delEmp('.$row['e_id'].')" style="margin-left:5%" class="btn btn-xs btn-danger"><i class="fa fa-xl fa-print"></i></button>
                             </td>
                             </tr>
                            '  ;
                        }}
                        ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->




