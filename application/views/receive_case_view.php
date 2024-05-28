 
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


.img_google_maps {
    width: 12%; /* ปรับขนาดของรูปภาพให้เต็มขนาดใน div */
    /* height: auto; */
    border-radius: 5px; เ
    
    

}

/* สำหรับหน้าจอที่กว้างไม่เกิน 768px */
@media (max-width: 992px) {
    .img_google_maps {
        width: 20%; /* ปรับขนาดของรูปภาพให้เล็กลงเมื่อหน้าจอเล็กลง */
    }
}

/* สำหรับหน้าจอที่กว้างไม่เกิน 576px */
@media (max-width: 768px) {
    .img_google_maps {
        width: 12%; /* ปรับขนาดของรูปภาพให้เล็กลงเมื่อหน้าจอเล็กลง */
    }
}

 </style>
 
 <!-- navbar -->
   <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1 col-sm" href="<?php echo site_url('receive/receive_case') ?>">
                <!-- <i class='bx bx-buildings bx-sm text-dark'></i> -->
                <img  src="<?php echo base_url();?>assets/img/ANDTOWNCOUNTRYPLANNING.png" alt="" style="width: 10%;">
                <!-- <img class="service card-img" src="./assets/img/services-01.jpg" alt="Card image"> -->
                <span class="text-dark h4 b">สำนักงานโยธาธิการ</span><span class="text-heading h4 b">และผังเมืองจังหวัดอุตรดิตถ์</span>
            </a>
            <button class="navbar-toggler border-0 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fills d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2 d-flex justify-content-end ">
                   




                </div>
                
            </div>
        </div>
    </nav>
  
  <style>

 .textQR {

    /* margin: 10px; */
    text-align: center;
    font-weight: bold;
    font-size: 18px;
    color: #6266ea;
    text-decoration: none;
 }

 .section_field{
    font-size: 18px;
    font-weight: bold;
 }
 .text_try{
    font-size: 16px;
    cursor: pointer;
 }

.text_try:hover {
    color: #9c27b0; /* เปลี่ยนสีเมื่อเมาส์ไปชี้ที่ลิงก์ */
}

  </style>
  
  
  <!-- Start Recent Work -->
  <section class=" mb-5">
        <div class="container">
            <div class="recent-work-header row text-center ">
                <h2 class="col-md-12 m-auto h2 semi-bold-600 py-5">ช่องทางรับเรื่องปัญหาความต้องการ</h2>
            </div>
            <div class="row gy-5 g-lg-5 mb-4">

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden" style="text-decoration: none;">
                        <img class="recent-work-img card-img" src="<?php echo base_url();?>assets/img/QR_line-รับเรื่อง.png" alt="Card image">
                        <p class="textQR">QR code LINE สำหรับส่งข้อมูลข้อปัญหาเกี่ยวกับความต้องการมาที่สำนักงานโยธาธิการและผังเมืองจังหวัดอุตรดิตถ์</p>
                        <!-- <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Social Media</h3>
                                <p class="card-text">Ullamco laboris nisi ut aliquip ex</p>
                            </div>
                        </div> -->
                    </a>
                </div><!-- End Recent Work -->

           

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden"  style="text-decoration: none;">
                        <img class="recent-work-img card-img" src="<?php echo base_url();?>assets/img/QR_facebook-DPT.png" alt="Card image">
                        <!-- <h4 class="card-title light-300 ">QR code Facebook สำนักงานโยธาธิการและผังเมืองจังหวัดอุตรดิตถ์</h4> -->
                        <p class="textQR">QR code Facebook สำนักงานโยธาธิการและผังเมืองจังหวัดอุตรดิตถ์ </p>
                        <!-- <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Web Marketing</h3>
                                <p class="card-text">Psum officia anim id est laborum.</p>
                            </div>
                        </div> -->
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden"  style="text-decoration: none;">
                        <img class="recent-work-img card-img" src="<?php echo base_url();?>assets/img/QR_google_drive_เอกสารประชุมผังเมือ-อต-ครั้งที่3.png" alt="Card image">
                        <!-- <h4 class="card-title light-300 ">QR code Facebook สำนักงานโยธาธิการและผังเมืองจังหวัดอุตรดิตถ์</h4> -->
                        <p class="textQR">QR code ไฟล์เอกสาร ร่างผังเมืองรวมอุตรดิตถ์ (ปรับปรุงครั้งที่ 3) </p>
                        <!-- <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Web Marketing</h3>
                                <p class="card-text">Psum officia anim id est laborum.</p>
                            </div>
                        </div> -->
                    </a>
                </div><!-- End Recent Work -->

        

            </div>
        </div>
    </section>


    <form action="" method="post" enctype="multipart/form-data">

    <section class="py-5 mb-5">
    <div class="container">
        <div class="recent-work-header row text-center">
            <h3 class="col-md-6 m-auto semi-bold-600 py-5 ">ส่งข้อมูลข้อปัญหาเกี่ยวกับความต้องการ</h3>
        </div>

        <div class="row">
                    <div class="col-md-2 mb-2">
                        <div class="form-outline">
                        <div class="form-label font-sg b" for="form3Example1m">ด้วยข้าพเจ้า <span style="color:red">*</span></div>
                            <select class="form-select form-control font-sg " name="title_name" id="title_name" style="cursor:pointer" aria-label="Default select example">
                            <option selected  value="">เลือก</option>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-outline">
                            <label class="form-label font-sg b"  for="firstname">ชื่อจริง <span style="color:red">*</span></label>
                        <input type="text" id="firstname" class="form-control "  placeholder="กรุณากรอก" />
                        
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-outline">
                            <label class="form-label font-sg b" for="lastname" >นามสกุล <span style="color:red">*</span></label>
                        <input type="text" id="lastname" class="form-control"  placeholder="กรุณากรอก" />
                        
                        </div>
                    </div>
                    <div class="col-md-2 mb-2">
                        <div class="form-outline">
                            <label class="form-label font-sg b" for="phone_user">เบอร์โทรศัพท์ <span style="color:red">*</span></label>
                        <input type="text" id="phone_user" class="form-control" placeholder="กรุณากรอกเบอร์โทรศัพท์"  maxlength="13"/>
            
                        </div>
                        <p id="result" style="color:#FF3333"></p>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="form-outline">
                            <label class="form-label font-sg b" for="google_maps">ลิ้งค์ตำแหน่งพิกัดจาก Google maps <span style="color:red">(ถ้ามี)</span></label>
                        <input type="text" id="google_maps" class="form-control"  maxlength="255"  placeholder="ตัวอย่าง https://maps.app.goo.gl/pqDSjwBzQ1N3g8Jf6" />
                        </div>

                        <!-- Button trigger modal -->
                        <a type="button" class="" style="color:red" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ตัวอย่าง การส่งลิ้งค์
                        </a>
                    </div>

                    <div class="col-md-1 mb-2">
                    

                    
                    </div>

                    <div class="col-md-4 mb-2">
                    <p class="font-sg b">  <span style="color:red">เปิด Google maps คลิกไอคอน</span> </p>
                        <a href="https://www.google.co.th/maps/@17.6927237,100.5259993,9.96z?entry=ttu" class="" onclick="window.open(this.href); return false;">
                     
                            <img class="img_google_maps" src="<?php echo base_url();?>assets/img/iconGoogleMaps.png" alt="Card image">
                        </a>
                        
                       

                    
                    </div>



                    
                </div>

        <div class="row gy-5 g-lg-12 mb-4 ">

 
            
            <div class="col-md-6 mb-3">

            <h4 class="font-sg b">ปัญหาที่เกิดขึ้นในการต้องมีมีด้านอะไรบ้าง <span style="color:red">*</span></h4>
                <div class="form-check ">
                    <input class="form-check-input text_try" type="checkbox" value="ด้านอุตสาหกรรมและคลังสินค้า" id="Check_side_1">
                    <label class="form-check-label text_try" for="Check_side_1">
                        ด้านอุตสาหกรรมและคลังสินค้า
                    </label>
                </div>

                <div class="form-check ">
                    <input class="form-check-input text_try" type="checkbox" value="ด้านพาณิชยกรมม(ธุรกิจโรงแรม , การค้าปลีกการค้าส่ง)" id="Check_side_2">
                    <label class="form-check-label text_try" for="Check_side_2">
                        ด้านพาณิชยกรมม(ธุรกิจโรงแรม , การค้าปลีกการค้าส่ง)
                    </label>
                </div>

                <div class="form-check ">
                    <input class="form-check-input text_try" type="checkbox" value="ด้านการอยู่อาศัย" id="Check_side_3">
                    <label class="form-check-label text_try" for="Check_side_3">
                        ด้านการอยู่อาศัย
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input text_try" type="checkbox" value="ด้านกฎหมาย" id="Check_side_4">
                    <label class="form-check-label text_try" for="Check_side_4">
                        ด้านกฎหมาย
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input text_try" type="checkbox" value="ด้านคมรมคม" id="Check_side_5">
                    <label class="form-check-label text_try" for="Check_side_5">
                        ด้านคมรมคม
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input text_try" type="checkbox" value="ด้านชนบทและเกษตรกรรม" id="Check_side_6">
                    <label class="form-check-label text_try" for="Check_side_6">
                        ด้านชนบทและเกษตรกรรม
                    </label>
                </div>

                <div class="form-check ">
                    <input class="form-check-input text_try" type="checkbox" value="อื่นๆ" id="Check_side_7">
                    <label class="form-check-label text_try" for="Check_side_7">
                        อื่นๆ
                    </label>
                </div>
            </div><!-- End col-md-6 -->


            <div class="col-md-6 mb-3">
                <label for="inputTextarea" class="form-label section_field font-sg b">สำหรับปัญหาที่เกิดขึ้น มีอะไรบ้าง <span style="color:red">*</span></label>
                <textarea class="form-control" id="inputTextarea" rows="3" placeholder="ป้อนข้อความ"></textarea>
            </div><!-- End col-md-4 -->
        </div><!-- End row -->

        

                <!-- <div class="col-md-12 mb-3"> -->

        
                    <div class="col-md-3 mb-2 d-grid gap-2 mx-auto" >
                        <!-- <div class="col-md-3"> -->
            

                            <!-- <div id="companyInput" style="display:none;">
                                <div class="col-md-12 mb-4" >
                                    <label class="form-label mb-2 font-sg" for="company_name" >ชื่อบริษัท, ห้างหุ้นส่วนจำกัด</label>
                                    <input type="text" class="form-control" id="company_name" name="company_name" oninput="checkData('company_name')"  placeholder="ชื่อบริษัท">
                                </div>
                            </div> -->
                            
                            
                                            <button type="button" class="btn btn-outline-primary btn-lg" id="btn_submit_receive_case">ยืนยัน</button>
                        </div>
                <!-- </div> -->

                
                <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfN_hIbFl5SvIm7thCu8J90lQuUIXhDjMLC9ojszEnFoFuU3g/viewform?embedded=true" width="640" height="4411" frameborder="0" marginheight="0" marginwidth="0">กำลังโหลด…</iframe> -->

                
                        

        
            </div><!-- End col-md-4 -->


    </div><!-- End container -->
</section><!-- End section -->
</form>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ตัวอย่าง</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

  <!-- Start Recent Work -->
                <div class="col-md-12 mb-3">
                   
                        <img class="recent-work-img card-img" src="<?php echo base_url();?>assets/img/การส่งลิ้งค์ตำแหน่งพิกัดจาก google maps.png" alt="Card image">
                        <!-- <h4 class="card-title light-300 ">QR code Facebook สำนักงานโยธาธิการและผังเมืองจังหวัดอุตรดิตถ์</h4> -->
                        <!-- <p class="textQR">QR code ไฟล์เอกสาร ร่างผังเมืองรวมอุตรดิตถ์ (ปรับปรุงครั้งที่ 3) </p> -->
                        <!-- <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Web Marketing</h3>
                                <p class="card-text">Psum officia anim id est laborum.</p>
                            </div>
                        </div> -->
                    
                </div><!-- End Recent Work -->

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


<script>



$(document).ready(function(){
    $("#btn_submit_receive_case").click(function(){
        // เช็ครูปแบบข้อมูลที่ต้องการตรวจสอบ
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var phone_user = $("#phone_user").val();
        var google_maps = $("#google_maps").val();
        var inputTextarea = $("#inputTextarea").val();

        // สร้างตัวแปรเพื่อเก็บ ID ของ Checkbox ที่ถูกติ๊กไว้
        var checkedValues = [];

        $(".form-check-input:checked").each(function(){
            checkedValues.push($(this).val());
        });

        // เช็คตามเงื่อนไขที่ต้องการ ในที่นี้เช็คให้ไม่เป็นค่าว่างเท่านั้น
        if(firstname === "" || lastname === "" || phone_user === "" || inputTextarea === "" || checkedValues.length === 0) {
            // ถ้ามีข้อมูลที่เป็นค่าว่าง หรือ Checkbox ไม่ได้ถูกติ๊ก ให้แสดงข้อความแจ้งเตือน
            alert("กรุณากรอกข้อมูลให้ครบถ้วนและเลือกปัญหาที่เกิดขึ้น");
        } else {

            var data = {
                firstname: firstname,
                lastname: lastname,
                phone_user: phone_user,
                google_maps: google_maps,
                inputTextarea: inputTextarea,
                checkedValues: checkedValues
            };
            
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('receive/data_receive_case/'); ?>", // เปลี่ยนเส้นทาง URL ให้เป็นเส้นทางของ Backend ของคุณ
                data: data,
                success: function(response) {
                    // จัดการกับการตอบสนองจาก Backend ตามที่ต้องการ
                    console.log(response);
                    // สามารถทำอื่นๆ เพิ่มเติมได้ตามความต้องการ
                },
                error: function(xhr, status, error) {
                    // กรณีเกิดข้อผิดพลาดในการส่งข้อมูล
                    alert("เกิดข้อผิดพลาดในการส่งข้อมูล");
                    console.error(xhr.responseText);
                }
            });

        }
    });
});





// var phone_user = $('#phone_user').val();

// $(document).ready(function() {
//     $("#btn_submit_receive_case").click(function(e) {
//         // ป้องกันการโหลดหน้าใหม่หลังจากกดปุ่ม
//         e.preventDefault();

//         // ส่งข้อมูลด้วย AJAX
//         $.ajax({
//             url: "<?php echo base_url('receive/data_receive_case/'); ?>",
//             type: "POST",
//             dataType: "json",
//             data: {
//                 phone_user: $('#phone_user').val(),
//                 // รายการข้อมูลอื่น ๆ ที่ต้องการส่ง
//             },
//             success: function(response) {
//                 // ดำเนินการหลังจากการสำเร็จ
//                 console.log(response); // แสดงข้อมูลที่ส่งกลับมาใน console
//             },
//             error: function(xhr, status, error) {
//                 // ดำเนินการเมื่อเกิดข้อผิดพลาด
//                 console.error(xhr.responseText); // แสดงข้อความผิดพลาดใน console
//             }
//         });
//     });
// });




</script>