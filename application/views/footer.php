<style>

.bg-secondary {
    background-color: #4B0082!important;
    /* background-color: #0392C2!important; */
}

.custom-icon-Footer {
    
    width: 30px; /* ปรับขนาดตามต้องการ */
    height: 30px; /* ปรับขนาดตามต้องการ */
    /* color: #b3e5fc;
    background: #4fc3f7; */
    color: #4B0082;
    background: #fff;
    margin-bottom: 15px;
    /* margin: 5px; */
    /* right: 0px; */
    border-radius: 5px;
    margin-right: 5px;
    
}
.custom-icon-Footer:hover {
    color: #4B0082;
    background: #aba8a8;  
}


  /* เพิ่มสไตล์ CSS สำหรับปุ่ม scroll-to-top */
#scroll-to-top-btn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: rgba(220,53,69,.25);
    color: #fff;
    padding: 8px 8px;
    border: none;
    border-radius: 7px;
    cursor: pointer;
    /* border: solid 1px #000000; */
}
#scroll-to-top-btn:hover {
        background-color: #f27474; /* สีเมื่อ hover ปุ่ม */
    }

</style>


<!-- Start Footer -->
 <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-4 col-12 align-left">
                    <a class="navbar-brand" href="<?php echo site_url('admin/index') ?>">
                    <img  src="<?php echo base_url();?>assets/img/ANDTOWNCOUNTRYPLANNING.png" alt="" style="width: 10%;">
                        <span class="text-light h5">กรมโยธาธิการ</span><span class="text-light h5 ">และผังเมืองจังหวัดอุตรดิตถ์</span>
                    </a>
                    <p class="text-light my-lg-4  my-2">
                    ศาลากลางจังหวัดอุตรดิตถ์ ชั้น 3 ตำบลท่าอิฐ อำเภอเมืองอุตรดิตถ์ จังหวัดอุตรดิตถ์ 53000
                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://th-th.facebook.com/yotaandplanninguttaradit">
                            <i data-feather="facebook" class="custom-icon-Footer"></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="mailto:uttaradit@dpt.mail.go.th">
                                <i data-feather="mail" class="custom-icon-Footer"></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a href="#" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i data-feather="phone-call" class="custom-icon-Footer "></i>
                            </a>
                        </li>
                        <!-- <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.flickr.com/">
                                <i class='bx bxl-flickr-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.medium.com/">
                                <i class='bx bxl-medium-square bx-md' ></i>
                            </a>
                        </li> -->
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300"></h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="<?php echo site_url('admin/index') ?>">หน้าแรก</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="<?php echo site_url('admin/land_inspection_services') ?>">บริการตรวจสอบที่ดิน</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="<?php echo site_url('admin/contact') ?>">ติดต่อสอบถาม</a>
                            </li>
                            <!-- <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="pricing.html">Price</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.html">Contact</a>
                            </li> -->
                        </ul>
                </div>

                <!-- <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">Our Works</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Branding</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Business</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Marketing</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Social Media</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Digital Solution</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Graphic</a>
                        </li>
                    </ul>
                </div> -->

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h5 pb-lg-3 text-light ">ติดต่อ</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">055-413348</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:uttaradit@dpt.mail.go.th">uttaradit@dpt.mail.go.th</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
<!-- 
        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2021 Purple Buzz Company. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>TemplateMo</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

    </footer>

    <?php
    //สำหรับปุ่มเลื่อนขึ้นไปด้านบน
    echo '<div id="scroll-to-top-btn"><i data-feather="chevrons-up" class=""></i></div>';
    ?>

    <!-- End Footer -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            //อ้างอิงปุ่มเลื่อนไปด้านบน
            var scrollToTopBtn = document.getElementById("scroll-to-top-btn");

            // เพิ่มตัวฟังเหตุการณ์สำหรับการเลื่อน
            window.addEventListener("scroll", function () {
                // หากตำแหน่งการเลื่อนมากกว่าหรือเท่ากับ 200px ให้แสดงปุ่ม
                if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                    scrollToTopBtn.style.display = "block";
                } else {
                    // มิฉะนั้น ให้ซ่อนปุ่ม
                    scrollToTopBtn.style.display = "none";
                }
            });

            // เพิ่มตัวฟังเหตุการณ์สำหรับการคลิกปุ่ม
            scrollToTopBtn.addEventListener("click", function () {
                // เลื่อนหน้าเว็บไปด้านบน
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            });
        });
    </script>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">โทรศัพท์</h1> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="b">โทรศัพท์ :</span> 055-413348 <br>
        <span class="b">โทรสาร :</span> 055-413348 <br>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div
