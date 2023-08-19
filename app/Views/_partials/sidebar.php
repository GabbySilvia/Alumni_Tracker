   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('/'); ?>">
           <div class="sidebar-brand-icon ">
               <p style="color:white;"><b>Tracker Study</b></p>
           </div>
       </a>
       <!-- Divider -->
       <hr class="sidebar-divider">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item active">
           <a class="nav-link" href="<?php echo base_url('/'); ?>">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
       </li>

       <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url('/tracking'); ?>">
               <i class="fas fa-fw fa-check-square"></i>
               <span>Data Tracker </span></a>
       </li>
       <?php if (session()->get('level') == 2) { ?>
           <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('users'); ?>">
                   <i class="fas fa-fw fa-user-check"></i>
                   <span>Data Users</span></a>
           </li>
       <?php } ?>

   </ul>
   <!-- End of Sidebar -->