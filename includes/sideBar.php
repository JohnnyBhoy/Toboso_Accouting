 <!-- Sidebar Menu -->
 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" <?php if($username!="TOBOSO Accounting"){echo"hidden";}else{echo "";}?>>
            <a href="../Home/index" id ="home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a> 
          </li> 
          <li class="nav-item">
            <a href="../Employee/index" id ="employee" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Employee 
              </p>
            </a> 
          </li>
          <li class="nav-item">
            <a href="../Payroll/index" id ="payroll" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Payroll 
              </p>
            </a> 
          </li>
          <li class="nav-item">
            <a href="../Loan/index" id ="loan" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Loan
              </p>
            </a> 
          </li>
          <li onclick="signOut()" class="nav-item">
            <a class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Sign Out 
              </p>
            </a> 
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


  
  