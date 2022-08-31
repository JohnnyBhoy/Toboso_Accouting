    <!-- For header -->
    <?php include '../includes/header.php';?>

    <!-- For tab active styling -->
    <style> #employee {color: #fff;background-color: #007bff;}</style>

    <!-- For sidebar -->
    <?php include '../includes/sideBar.php';?>

    <!-- For functions -->
    <?php include '../includes/functions.php';?>
    
    <!-- For exmployee  body -->
    <?php include '../includes/phpSource/viewEmployeeData.php';?>
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
   <br><br><div class="container-fluid">
    <div <?php if($_GET['e_id'] != 1) {echo "hidden";}?>>
      <h4>Deductions <i class="fas fa-arrow-down"></i></h4>
        <br><div class="row">
          <div class="col-12">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title">Employee Name : <b><?php echo $first_name ,' ',$middle_name,' ',$last_name,' ',$suffix;?></b></h6>
              <button type="button" onclick="returnIndex()" class="btn btn-xs btn-info" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="post">
            <div class="modal-body">
            <div class="row">
                <?php 
                inputTextData('GSIS Premium','number',$gsis_prem,'gsis_prem','gsis_prem');
                inputTextData('GSIS Policy','number',$gsis_policy,'gsis_policy','gsis_policy');
                inputTextData('HDMF Premium','number',$hdmf_prem,'hdmf_prem','hdmf_prem');
                inputTextData('HDMF Policy','number',$hdmf_policy,'hdmf_policy','hdmf_policy');
                inputTextData('Phil-Health','number',$philhealth,'philhealth','philhealth');
                inputTextData('Withholding Tax','number',$tax,'tax','tax');
                inputTextData('MP2','number',$mp2,'mp2','mp2');
                inputTextData('Others','number',$last_name,'lname','lname');
                ?>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-xs  btn-danger" onclick="returnIndex()" >Close</button>
              <button type="submit" name="addDeductions" class="btn btn-xs btn-primary">Save Changes</button>
            </div>
          </div>
        </div>
    </form>     
   </div>
  </div>
</div>
      <!-- /.modal -->

      <div <?php if($_GET['e_id'] != 2) {echo "hidden";}?>>
      <h4>Loan <i class="fas fa-arrow-down"></i></h4>
        <br><div class="row">
          <div class="col-12">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title">Employee Name : <b><?php echo $first_name ,' ',$middle_name,' ',$last_name,' ',$suffix;?></b></h6>
              <button type="button" onclick="returnIndex()" class="btn btn-xs btn-info" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="post">
            <div class="modal-body">
            <div class="row">
                <?php 
                inputTextData('Loan A','text','GSIS','gsis','gsis');
                inputTextData('Principal','number',250000,'gsis_policy','gsis_policy');
                inputTextData('Term','number','24','hdmf_prem','hdmf_prem');
                inputTextData('Balance','number',50000,'hdmf_policy','hdmf_policy');
                ?>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-xs  btn-danger" onclick="returnIndex()" >Close</button>
              <button type="submit" name="addDeductions" class="btn btn-xs btn-primary">Save Changes</button>
            </div>
          </div>
        </div>
    </form>     
   </div>
  </div>
</div>

<!--For Additional-->
<div <?php if($_GET['e_id'] != 3) {echo "hidden";}?>>
      <h4>Additionals <i class="fas fa-arrow-down"></i></h4>
        <br><div class="row">
          <div class="col-12">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title">Employee Name : <b><?php echo $first_name ,' ',$middle_name,' ',$last_name,' ',$suffix;?></b></h6>
              <button type="button" onclick="returnIndex()" class="btn btn-xs btn-info" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="post">
            <div class="modal-body">
            <div class="row">
                <?php 
                inputTextData('PERA','number',$gsis_prem,'gsis_prem','gsis_prem');
                inputTextData('RATA','number',$gsis_policy,'gsis_policy','gsis_policy');
                inputTextData('Others','number',$hdmf_prem,'hdmf_prem','hdmf_prem');
                inputTextData('Bonuses','number',$hdmf_policy,'hdmf_policy','hdmf_policy');
                ?>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-xs  btn-danger" onclick="returnIndex()" >Close</button>
              <button type="submit" name="addDeductions" class="btn btn-xs btn-primary">Save Changes</button>
            </div>
          </div>
        </div>
    </form>     
   </div>
  </div>
</div>

<!-- For home body -->
<?php include '../includes/footer.php';?>

<!-- For home body -->
<?php include '../includes/footerScripts.php';?>
