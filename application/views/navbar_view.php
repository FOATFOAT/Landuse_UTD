
<style>

.text-heading{
    color: #673ab7;
}

.nav-link.active {
  color: white;
}

.nav-text{
    font-weight: bold;
    font-size: 18px;
}

@media (max-width: 768px) {
    .navbar-brand .h4 {
        font-size: 18px; /* ปรับขนาดตามที่คุณต้องการ */
    }
}

@media (min-width: 990px){ /* ความห่าง btn นาบบาร */
.mx-xl-5 {
    margin-right: 0rem! important;
    margin-left: 0rem! important;
}
}

/* ปรับปุมนามบาร */
.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
  align-items: flex-end;
  /* flex-direction: column; */
  /* align-content: center; */

}


.btn-check:active+.btn-custom,
.btn-check:checked+.btn-custom,
.btn-custom.active,
.btn-custom.dropdown-toggle.show,
.btn-custom:active,
.btn-custom:hover {
    background-color: #7e57c2;
}

<?php
// ตำแหน่งนี้คือส่วนหัวของเว็บหรือไฟล์ที่โหลดก่อน
echo '<script>';
echo 'var baseUrl = "' . site_url() . '";';
echo '</script>';
?>

</style>
   <!-- navbar -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1 col-sm" href="<?php echo site_url('admin/index') ?>">
                <!-- <i class='bx bx-buildings bx-sm text-dark'></i> -->
                <img  src="<?php echo base_url();?>assets/img/ANDTOWNCOUNTRYPLANNING.png" alt="" style="width: 40px;">
                <!-- <img class="service card-img" src="./assets/img/services-01.jpg" alt="Card image"> -->
                <span class="text-dark h4 b">DPT </span><span class="text-heading h4 b">UTTARADIT</span>
                <!-- <span class="text-dark h4 b">สำนักงานโยธาธิการ</span><span class="text-heading h4 b">และผังเมืองจังหวัดอุตรดิตถ์</span> -->
            </a>
            <button class="navbar-toggler border-0 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fills d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2 d-flex justify-content-end ">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark sty">
                        <li class="nav-item mx-1 ">
                            <a class="nav-link btn-custom rounded-pill px-3 nav-text <?php echo ($this->uri->segment(2) == 'index') ? 'active' : ''; ?>" href="<?php echo site_url('admin/index') ?>">หน้าแรก</a>
                            <!-- <a class="nav-link btn-outline-success rounded-pill px-3 nav-text <?php echo ($this->uri->segment(2) == 'index') ? 'active' : ''; ?>" href="<?php echo site_url('admin/index') ?>">หน้าแรก</a> -->
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link btn-custom rounded-pill px-3 nav-text <?php echo ($this->uri->segment(2) == 'land_inspection_services') ? 'active' : ''; ?>" href="<?php echo site_url('admin/land_inspection_services') ?>">บริการตรวจสอบที่ดิน</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link btn-custom rounded-pill px-3 nav-text <?php echo ($this->uri->segment(2) == 'contact') ? 'active' : ''; ?>" href="<?php echo site_url('admin/contact') ?>">ติดต่อสอบถาม</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="pricing.html">แผนผังเว็บไซต์</a>
                        </li> -->
                        <!-- <li class="nav-item mx-1">
                            <a class="nav-link btn-custom rounded-pill px-3 nav-text <?php echo ($this->uri->segment(2) == 'login') ? 'active' : ''; ?>" href="<?php echo site_url('admin/login') ?>">เข้าสู่ระบบ</a>
                        </li> -->
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <!-- <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a> -->
                    <!-- <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a> -->
                    
                    <!-- <a class="nav-link dropdown" href="#"><i class='bx bx-user-circle bx-sm text-primary'></i></a> -->

                        <!-- <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  data-bs-auto-close="outside">
                           <i class='bx bx-user-circle bx-sm text-primary'></i> 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                    
                </div>
            </div>
        </div>
    </nav>
    <!-- Close navbar -->
    

<script>

// document.addEventListener('DOMContentLoaded', function () {
//         const dropdownToggle = document.querySelector('.nav-link.dropdown-toggle');
//         const dropdownMenu = document.querySelector('.dropdown-menu');

//         dropdownToggle.addEventListener('mouseenter', function () {
//             dropdownMenu.classList.add('show');
//         });

//         dropdownToggle.addEventListener('mouseleave', function () {
//             dropdownMenu.classList.remove('show');
//         });

//         dropdownMenu.addEventListener('mouseenter', function () {
//             dropdownMenu.classList.add('show');
//         });

//         dropdownMenu.addEventListener('mouseleave', function () {
//             dropdownMenu.classList.remove('show');
//         });
//     });

// const links = document.querySelectorAll('.nav-link');
    
// if (links.length) {
//   links.forEach((link) => {
//     link.addEventListener('click', (e) => {
//       links.forEach((link) => {
//           link.classList.remove('active');
//       });
//       e.preventDefault();
//       link.classList.add('active');
//     });
//   });
// }
</script>