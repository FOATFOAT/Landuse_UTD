
     
  <style>

    .bavvv{ /* โลโก */
      font-weight: bold;
      font-size: 28px;
      text-decoration: none;
      position: absolute; 
    }

    .font-menu{ /* ชื่อนาบบาร์ */
      font-weight: bold;
      font-size: 19px;
    }
    .hide-menu{ /* ชื่อนาบบาร์ */
      font-weight: bold;
      font-size: 17px;
    }

    .custom-icon {
    
    width: 20px; /* ปรับขนาดตามต้องการ */
    height: 20px; /* ปรับขนาดตามต้องการ */
    color: #212529;

    
  }

  .sidebar-nav ul .sidebar-item.selected>.sidebar-link, .sidebar-nav ul .sidebar-item.selected>.sidebar-link.active, .sidebar-nav ul .sidebar-item>.sidebar-link.active {
    background-color: #5a6a85;
    color: #fff;
}
  </style>


<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="" class="text-nowrap logo-img" style="text-decoration:none" >
          <img  src="<?php echo base_url();?>assets/img/LOGO_PTD03.png" alt="" style="width: 20%;">
            <!-- <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" /> -->
            &nbsp;&nbsp; <span class="bavvv " > DPT_UTT</span>
          
          </a>
          
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="font-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link  <?php echo ($this->uri->segment(2) == 'inside_system') ? 'active' : ''; ?>" href="<?php echo site_url('admin/inside_system') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="font-menu">รอรับเรื่อง</span>
            </li>
            <li class="sidebar-item">
            <a class="sidebar-link  <?php echo ($this->uri->segment(2) == 'inside_receive_tb_cpn') ? 'active' : ''; ?>" href="<?php echo site_url('admin/inside_receive_tb_cpn') ?>" aria-expanded="false">
                <span>
                  <!-- <i class="ti ti-article"></i> -->
                  <i data-feather="table"  class="custom-icon"></i>
                </span>
                <span class="hide-menu">ตาราง - บริษัท</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url('admin/inside_receive_tb_ps') ?>" aria-expanded="false">
                <span>
                  <!-- <i class="ti ti-alert-circle"></i> -->
                  <i data-feather="file-text"  class="custom-icon"></i>
                </span>
                <span class="hide-menu">ตาราง - คน</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="font-menu">รับเรื่อง</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">ตาราง - บริษัท</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">ตาราง - คน</span>
              </a>
            </li>
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Typography</span>
              </a>
            </li> -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="font-menu">ตรวจสอบ</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">ตาราง - บริษัท</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">ตาราง - คน</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="font-menu">จัดการ</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">ตารางรวม</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">ผู้ใช้</span>
              </a>
            </li>
          </ul>
          <!-- <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
              </div>
            </div>
          </div> -->
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>

          <style>


</style>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <!-- <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a> -->
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img class="" src="<?php echo base_url();?>assets/img/นายฉัตรมงคล ฮาดฟอง.jpg" alt="profileImg" height="35" class="rounded-circle" style=" border-radius: 100%;">
                  <!-- <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle"> -->
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 ">ประวัติของฉัน</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 ">บัญชีของฉัน</p>
                    </a>
                    <!-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 ">My Task</p>
                    </a> -->
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">ออกจากระบบ</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->