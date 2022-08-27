<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"">
  <!-- Main content -->
  <section class="content" style="margin-top:9%">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th >Name</th>
                    <th>Department</th>
                    <th>Job Title</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <!-- Show employee-->
                       <?php
                        $Employee = "SELECT * FROM employee ORDER BY last_name ASC";
                        $result = mysqli_query($con, $Employee);
                        if (mysqli_num_rows($result)> 0 ) 
                        {
                           while($row = mysqli_fetch_assoc($result)) {
                             echo ' 
                             <tr><td>'.$row['last_name'],' ',$row['first_name'],' ,', $row['middle_name'],$row['suffix'].'</td>  
                             <td>'.$row['department'].'</td>  
                             <td>'.$row['job_title'].'</td>  
                             <td>'.date_diff(date_create($row['birth_date']),date_create('now'))->y.' Y/o</td>  
                             <td>'.$row['addres'].'</td>  
                             <td><a href="ViewEmployee?id='.$row['e_id'].'">
                             <button class="btn btn-xs btn-info" style="margin-left:5%" ><i class="fa fa-xl fa-eye"></i></button></a>
                             <a href="ViewEmployee?id='.$row['e_id'].'">
                             <button class="btn btn-xs btn-primary" style="margin-left:5%"  ><i class="fa fa-xl fa-edit"></i></button></a>
                             <button  onClick="delEmp('.$row['e_id'].')" style="margin-left:5%" class="btn btn-xs btn-danger"><i class="fa fa-xl fa-trash"></i></button>
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




