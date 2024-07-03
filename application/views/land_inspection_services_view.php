<?php
// ตรวจสอบว่ามีการส่งค่ารหัสมาจากฝั่ง client หรือไม่
if(isset($_POST['captchaInput'])) {
    session_start();
    // ตรวจสอบว่ารหัสที่ผู้ใช้ป้อนเข้ามาตรงกับรหัสที่สร้างขึ้นหรือไม่
    $isCaptchaValid = ($_POST['captchaInput'] == $_SESSION['captcha_code']);

    // ส่งผลลัพธ์กลับไปยัง JavaScript
    echo json_encode(array('isValid' => $isCaptchaValid));

    // สิ้นสุดการทำงานของ script
    exit();
}

?>

<style>

.custom-icon {
    
    width: 40px; /* ปรับขนาดตามต้องการ */
    height: 40px; /* ปรับขนาดตามต้องการ */
    
  }
.custom-icon2 {
    
    width: 25px; /* ปรับขนาดตามต้องการ */
    height: 25px; /* ปรับขนาดตามต้องการ */
    
  }
.icon-check {
    
    width: 15px; /* ปรับขนาดตามต้องการ */
    height: 15px; /* ปรับขนาดตามต้องการ */
    
  }


.swal-small {
  max-width: 200px; /* ปรับขนาดตามที่ต้องการ */
}

.btn_final {
  display: flex !important;
  flex-direction: column;
  align-items: flex-end;
}


</style>


<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-2">
          <div class="row g-0">
            <!-- <div class="col-xl-6 d-none d-xl-block">
              <img src="<?php echo base_url();?>assets/img/1238.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              <img src="<?php echo base_url();?>assets/img/1238.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div> -->
            
            <div class="col-xl-12">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-2 text-uppercase b text-section"> <i data-feather="user"  class="custom-icon"></i> ข้อมูลขอตรวจการใช้ประโยชน์ที่ดิน</h3>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="row">
                    <div class="col-md-9 mb-2">
                      <div class="form-outline">
                        <!-- <div class="form-label font-sg" for="form3Example1m">เป็นบริษัท</div> -->
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" autocomplete="off" id="company" onchange="toggleCompany()" style="cursor:pointer; width: 60px; height: 30px;">
                            <label class="form-check-label font-sg" style="margin: 6px;"  for="company"> <h5 class="b">ยื่นในนามบริษัท <h5></label>
                          </div>

                          <!-- <div style="width:100%;text-align:right;"><input type="button" value="ปุ่มชิดขวา"></div> -->
                          <!-- <div class="col-md-3 ">
                          <label for="today" class=" col-form-label font-sg b">วันที่</label>
                          <div class="">
                          <input type="text" id="today" class="form-control"  oninput="checkData('today')"  disabled="disabled" />
                          </div>
                        </div> -->

                      </div>
                    </div>

                    <!--                   
                        <div class="col-md-3 mb-4">
                          <div class="form-outline"  style="width:100%;text-align:right;">
                              <label class="form-label font-sg b" for="phone_user">วันที่ </label>
                            <input type="text" id="today" class="form-control"  oninput="checkData('today')"  disabled="disabled" />
                          </div>
                        </div> -->


                    
                        

                      <div id="companyInput" style="display:none;">
                      <!-- <div id="companyInput" style="display:none;"> -->
                            <div class="col-md-6 mb-4" >
                                <label class="form-label mb-2 font-sg b" for="company_name" >ชื่อบริษัท, ห้างหุ้นส่วนจำกัด <span style="color:red">*</span></label>
                                <input type="text" class="form-control" id="company_name" name="company_name" oninput="checkData('company_name')"  placeholder="ชื่อบริษัท">
                            </div>
                      </div>
                    </div>
                    
            
          
                  <div class="col-md-3 mb-2">
                    <div class="form-outline">
                    <div class="form-label font-sg b" for="form3Example1m">ด้วยข้าพเจ้า <span style="color:red">*</span></div>
                        <select class="form-select form-control font-sg " name="title_name" id="title_name" style="cursor:pointer" oninput="checkData('title_name')" aria-label="Default select example">
                           <option selected  value="">เลือก</option>
                           <option value="นาย">นาย</option>
                           <option value="นาง">นาง</option>
                           <option value="นางสาว">นางสาว</option>
                           <!-- <option value="บริษัท">บริษัท</option> -->
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6 mb-2" >
                    <!-- <div class="col-md-3"> -->
                    <div id="del_sex">
                        <div class="mb-0 me-4 font-sg b">เพศ:</div>
                         <div class="d-md-flex justify-content-start align-items-center mb-4 py-2 font-sg">
                            <!-- <h6 class="mb-0 me-4">เพศ: </h6> -->
                            <div class="form-check form-check-inline mb-0 me-4">
                            <input class="form-check-input" type="radio" name="sex" id="male" disabled
                                value="option1"  />
                            <label class="form-check-label" for="male">ชาย</label>
                            </div>

                            <div class="form-check form-check-inline mb-0 me-4">
                            <input class="form-check-input" type="radio" name="sex" id="female" disabled
                                value="option2" />
                            <label class="form-check-label" for="female">หญิง</label>
                         </div>
                        </div>
                    </div>

                        <!-- <div id="companyInput" style="display:none;">
                            <div class="col-md-12 mb-4" >
                                <label class="form-label mb-2 font-sg" for="company_name" >ชื่อบริษัท, ห้างหุ้นส่วนจำกัด</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" oninput="checkData('company_name')"  placeholder="ชื่อบริษัท">
                            </div>
                        </div> -->
                        
                    </div>
                  </div>

                <div class="row">
                  <div class="col-md-4 mb-2">
                    <div class="form-outline">
                        <label class="form-label font-sg b"  for="firstname">ชื่อจริง <span style="color:red">*</span></label>
                      <input type="text" id="firstname" class="form-control " oninput="checkData('firstname')" placeholder="กรุณากรอก" />
                      <input type="text" id="firstname_disabled" class="form-control " disabled="disabled" placeholder="ถ้าเป็นบริษัทไม่ต้องใส่ชื่อจริง" />
                    </div>
                  </div>
                  <div class="col-md-4 mb-2">
                    <div class="form-outline">
                        <label class="form-label font-sg b" for="lastname" >นามสกุล <span style="color:red">*</span></label>
                      <input type="text" id="lastname" class="form-control" oninput="checkData('lastname')" placeholder="กรุณากรอก" />
                      <input type="text" id="lastname_disabled" class="form-control " disabled="disabled" placeholder="ถ้าเป็นบริษัทไม่ต้องใส่นามสกุล" />
                    </div>
                  </div>
                  <div class="col-md-2 mb-2">
                    <div class="form-outline">
                        <label class="form-label font-sg b" for="ID_card">หมายเลขบัตรประชาชน <span style="color:red">*</span></label>
                      <input type="text" id="ID_card" class="form-control" placeholder="กรุณากรอกเลข 13 หลัก" oninput="restrictToNumeric('ID_card'); checkIdCard();"  maxlength="13"/>
                      <input type="text" id="ID_card_disabled" class="form-control " disabled="disabled" placeholder="ถ้าเป็นบริษัทไม่ต้องใส่เลขบัตร" />
                    </div>
                    <p id="result" style="color:#FF3333"></p>
                  </div>
                  <div class="col-md-2 mb-2">
                    <div class="form-outline">
                        <label class="form-label font-sg b" for="phone_user">หมายเลขโทรศัพท์ <span style="color:red">*</span></label>
                      <input type="text" id="phone_user" class="form-control"  maxlength="10" oninput="checkData('phone_user')" placeholder="กรุณากรอก 10 หลัก" />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <!-- <div class="col-md-3 mb-2">
                    <div class="form-outline">
                        <label class="form-label font-sg b"  for="land_title_number">โฉนดที่ดินเลขที่ <span style="color:red">*</span></label>
                      <input type="text" id="land_title_number" class="form-control " maxlength="7" oninput="restrictToNumeric('land_title_number'); checkData('land_title_number')" placeholder="กรุณากรอก" />
                    </div>
                  </div>
                  <div class="col-md-3 mb-2">
                    <div class="form-outline">
                        <label class="form-label font-sg b" for="land_number" >เลขที่ดิน <span style="color:red">*</span></label>
                      <input type="text" id="land_number" class="form-control" maxlength="10" oninput="restrictToNumeric('land_number'); checkData('land_number');" placeholder="กรุณากรอกเลขที่ดิน" />
                    </div>
                  </div>
                  <div class="col-md-3 mb-2">
                    <div class="form-outline">
                        <label class="form-label font-sg b" for="survey_page_number">เลขหน้าสำรวจ <span style="color:red">*</span></label>
                      <input type="text" id="survey_page_number" class="form-control" placeholder="กรุณากรอกเลขเลขหน้าสำรวจ" oninput="restrictToNumeric('survey_page_number'); checkData('survey_page_number');"  maxlength="13"/>
                    </div>
                    
                  </div> -->
                  <!-- <div class="col-md-3 mb-4">
                    <div class="form-outline">
                        <label class="form-label font-sg b" for="phone_user">วันที่ </label>
                      <input type="text" id="today" class="form-control"  oninput="checkData('today')"  disabled="disabled" />
                    </div>
                  </div> -->
                </div>
                

                <div class="row">
                  <div class="col-md-3 mb-4">
                    <div class="font-sg mb-2 b" for="amphure">อำเภอ <span style="color:red">*</span></div>
                      <select class="form-control font-sg" name="amphure" id="amphure" onchange="loadSubdistricts(), checkData('amphure')">
                              <option selected  value="">เลือก</option>
                          <?php foreach ($districts as $district): ?>
                              <option value="<?= $district['amphure_id'] ?>"><?= $district['name_th'] ?></option>
                          <?php endforeach; ?>
                      </select>
                  </div>

                  <div class="col-md-3 mb-4">
                    <div class="font-sg mb-2 b" for="form3Example1m">ตำบล <span style="color:red">*</span></div>
                      <select class="form-control font-sg" name="tambonsid" id="tambonsid" onchange="displayPostalCode(), checkData('tambonsid')">
                            <option selected  value="">เลือก</option>
                      </select>
                  </div>


                  <div class="col-md-3 mb-4">
                    <div class="form-outline">
                        <label class="form-label font-sg b" for="provinces">จังหวัด</label>
                      <input type="text" id="provinces" class="form-control " value="จังหวัดอุตรดิตถ์" disabled="disabled" />
                    </div>
                  </div>

                  <div class="col-md-3 mb-4">
                    <div class="form-outline">
                        <label class="form-label font-sg b" for="zip_code">รหัสไปรษณีย์</label>
                      <input type="text" id="zip_code" class="form-control font-sg"  placeholder="รหัสไปรษณีย์"  disabled="disabled" />
                    </div>
                  </div>

                  <?php
// phpinfo();
?>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <label class="form-label font-sg b " for="utilization">ท่านจะใช้ที่ดินดังกล่าวเพื่อประโยชน์ใดในการดำเนินกิจการครับ/ค่ะ? <span style="color:red">*</span></label>
                      <input type="text" id="utilization" class="form-control"  oninput="checkData('utilization')"  />
                    </div>
                  </div>

                                             
                        <div class="col-md-3 mb-2">
                          <div class="form-outline" >
                              <label class="form-label font-sg b" for="phone_user">วันที่ </label>
                            <input type="text" id="today" class="form-control"  oninput="checkData('today')"  disabled="disabled" />
                          </div>
                        </div>

                  <!-- <div class="col-md-2 mb-4">
                    <div class="form-outline">
                        <div class=" font-sg mb-4" >ได้หรือไม่</div>
        
                    </div>
                  </div> -->
                  
                </div>

                
<!--             
                <div class="form-outline mb-4">
                </div> -->

                <!-- </style> -->
                <!-- <form id="myForm">
        <label for="dataInput45">ข้อมูล:</label>
        <input class="form-control" type="text" id="dataInput45" name="dataInput" oninput="checkData('dataInput45')" >
    </form> -->

                <!-- <div class="form-outline mb-4">
                  <input type="text" id="form3Example97d" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example97d">Email ID</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example99" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Course</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div> -->
<!-- 
                <div class="d-flex justify-content-end pt-3">
              
                  <button type="button" class="btn btn-outline-success btn-lg ms-2 font-sm" id="btn_submit">ยืนยัน</button>
                </div> -->

              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="h-100 bg-dark">
  <div class="container  h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-2">
          <div class="row g-0">
     
         
            <div class="col-xl-12">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-2 text-uppercase b text-section" > <i data-feather="file-text"  class="custom-icon"></i> เอกสารขอตรวจการใช้ประโยชน์ที่ดิน</h3>
                <!-- <span style="color:red"></span> -->
                <form action="">
              
                <div class="row">
                  <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <label class="form-label font-sg b" for="ID_card_Copy">สำเนาบัตรประชาชน <span style="color:red">* <span style="font-size: 13px">(ไฟล์ .jpg .jpeg .png)</span></span></label>
                        <input class="form-control" type="file" accept=".jpg, .jpeg, .png" id="ID_card_Copy" onchange="handleFileSelection('ID_card_Copy')" >
                      
                        <!-- ส่วนที่ใช้แสดงข้อความอัปโหลดสำเร็จ -->
                      
                        <span id="showUploadStatus2" style="color: green;" ></span>
                        <div class="image_show" id="showimg_ID_card_Copy"></div>
                    </div>
                    
                  </div>  
                  
                  <div class="col-md-6 mb-2">
                      <label class="form-label font-sg b" for="house_regis_Copy">สำเนาทะเบียนบ้าน <span style="color:red">* <span style="font-size: 13px">(ไฟล์ .jpg .jpeg .png)</span></span></label>
                      <input class="form-control" type="file" accept=".jpg, .jpeg, .png" id="house_regis_Copy" onchange="handleFileSelection('house_regis_Copy')" >
                     
                      <span id="showUploadStatus3" style="color: green;" ></span>
                      <div class="image_show" id="showimg_house_regis_Copy" style="display: none;"></div>
                    </div> 

                </div>



                <style>
     .image-set {
    margin-bottom: 20px;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 8px;
    position: relative;
    /* display: inline-block; */
  }
  .preview-image {
    display: block;
   
    width: 55%;
    height: auto;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    margin: auto;
    margin-bottom: 10px;
  }
  .delete-button {

    position: absolute;
    top: 10px;
    right: 10px;
    background-color: #ff5e5e;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    cursor: pointer;

  }
  .delete-button:hover {
    background-color: #ff3b3b;
  }
  .input-container {
    margin-bottom: 10px;
    /* margin-top: 10px; */
    display: flex;
    align-items: center;
  }
  .input-label {
    width: 200px;
    text-align: right;
    margin-right: 10px;
    font-size: 17px;
    font-weight: bold;
  }
  .input-field {
    flex: 1;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 17px;
  }
  .input-field:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
  }
  .upload-button {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
  }
  .upload-button:hover {
    background-color: #0056b3;
  }

  @media screen and (max-width: 575px) {
  .input-container {
    justify-content: center;
    flex-direction: column;
    /* width: 100px; */
  }
  .input-label {
    /* width: 100px; */
    /* margin-right: 0px; */
    text-align: center;
  }
}



/* CSS */
.button-62 {
  background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
  border: 0;
  border-radius: 12px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 17px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 0 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  width: 100%;
}

.button-62:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-62:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}


</style>

                <div class="row">
                  <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <label class="form-label font-sg b">สำเนาโฉนดที่ดิน <span style="color:red"> *<span style="font-size: 13px">(สามารถเพิ่มได้มากกว่า 1 รูป ไฟล์ .jpg .jpeg .png)</span></span> </label>
                        <!-- <input type="file" name="image" id="image" accept="image/*"> -->
                      



                        

                        <div id="imageContainer">
                          <!-- ตำแหน่งที่รูปภาพจะแสดง -->
                        </div>
                        <button class="button-62" type="button" onclick="addImageSet()">อัพโหลดภาพโฉนดที่ดิน</button>

                        
                        
                        
                 

                    </div>
                    <!-- <input class="form-control" type="file" name="image" id="image" accept="image/*"> -->
      

                  </div>  
                    
                    <div class="col-md-6 mb-2">
                      <div id="company_Copy" style="display:none;">
                        <label class="form-label font-sg b" for="copy_company_certificate">หนังสือรับรองการจดทะเบียนบริษัท <span style="color:red">* <span style="font-size: 13px">(ไฟล์ .jpg .jpeg .png)</span></span></label>
                        <!-- <input class="form-control" type="file" accept=".jpg, .jpeg, .png" id="company_certificate" onchange="handleFileSelection('company_certificate')" >

                        <span id="showUploadStatus4" style="color: green;" ></span>
                        
                        <div class="image_show" id="showimg_company_certificate" style="display: none;"></div> -->


                          
                         <!-- ส่วนที่ใช้อัปโหลดรูป -->
                         <input class="form-control" type="file" accept=".jpg, .jpeg, .png" id="copy_company_certificate"  onchange="showImages('copy_company_certificate')">
                         <!-- <input class="form-control" type="file" accept=".jpg, .jpeg, .png" id="copy_land_deed"  onchange="showImages('copy_land_deed')"> -->
                      
                        <!-- ส่วนที่ใช้แสดงข้อความอัปโหลดสำเร็จ -->
                        <span id="showUploadStatus" style="color: green;" ></span>

                        <!-- ส่วนที่ใช้แสดงรูป -->
                        <div id="image-container" class="image-container"></div>



                      </div> 
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-6 mb-2">
                      <div class="form-outline">
                          <label class="form-label font-sg b" for="Other_documents_Copy">แผนที่แสดงต่ำแหน่งพื้นที่ที่ดิน <span style="color:red">ถ้ามี <span style="font-size: 13px">(ไฟล์ .jpg .jpeg .png)</span></span></label>
                          <input class="form-control" type="file" accept=".jpg, .jpeg, .png" id="Other_documents_Copy" onchange="handleFileSelection('Other_documents_Copy')" multiple>

                          <span id="showUploadStatus5" style="color: green;" ></span>
                          <div class="image_show" id="showimg_Other_documents_Copy" style="display: none;"></div>


                      </div>
        
                </div>  
                  
                <style>
.box { /* กรอบเส้นสีแดง */
    /* background-color: #fff0f0; */
    /* border: dotted 2px #ff0000; */
    border: solid 2px #ff0000;
    /* width: 50%; */
    /* height: 100%; */
    word-break: break-word; 
    border-radius: 20px;
}
    /* #securityCodeImage {
            width: 200px;
            height: 100px;
        } */
  .custom-radio {
    width: 20px; /* กำหนดขนาดของ radio button */
    height: 20px;
  }
  .custom-checkbox-con {
    width: 20px; /*  */
    height: 20px;
  }

  .error-message {
            color: red;
            font-size: 15px;
            margin-top: 5px;
            display: none;
        }

</style>
                
               
                <p>
                <p>
                 <hr> <!--เส้นแบ่ง------- -->


                <div class="container text-center">
                  <div class="row">
                    <div class="col text-start">
                      <span class="mb-2 text-uppercase font-sg b"> <i data-feather="info"  class="custom-icon2"></i> ท่านจะรับเอกสารทางช่องทางใด <span style="color:red">*</span></span>
                      <div class="form-check">
                        <input class="form-check-input custom-radio" type="radio" name="receive_documents" id="receive_documents1" value="1" >
                        <label class="form-check-label" for="receive_documents1">
                          มารับด้วยตัวเอง (สำนักงานโยธาธิการและผังเมืองจังหวัดอุตรดิตถ์)
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input custom-radio" type="radio" name="receive_documents" id="receive_documents2" value="2">
                        <label class="form-check-label" for="receive_documents2">
                          รับทาง e-mail (ไปรษณีย์อิเล็กทรอนิกส์)
                        </label>
                          <div id="emailInputContainer" style="display: none;">
                            <div class="col-xs-6 col-sm-6 col-lg-6 col-xl-6">
                              <label for="email">E-mail <span style="color:red">*</span> </label>
                              <input  class="form-control" type="email" id="email" autocomplete="email" placeholder="อีเมล" name="email">
                              <div class="error-message" id="email-error-message">รูปแบบอีเมลไม่ถูกต้อง</div>
                            </div>
                         </div>
                      </div>
                  
                    </div>
                    <!-- <div class="col">
                      2 of 2
                    </div> -->
                  </div>
                </div>


      
                
               
                <p>
                <hr> <!--เส้นแบ่ง------- -->

                 <!-- <h1>กรุณายืนยันรหัสความปลอดภัย</h1>
    <img id="securityCodeImage" src="<?php echo site_url('admin/generate_security_code'); ?>" alt="Security Code">

    <input type="text" id="securityCode" oninput="validateSecurityCode()"> -->


                <div class="container text-center"> 
                  <div class="row justify-content-center">
                    <!-- <div class="col">
                      1 of 3
                    </div> -->

                    <div class="col-12 col-xs-12 col-sm-10 col-lg-8 col-xl-6 box">
                      <span>  <i data-feather="check-square"  class="icon-check"></i> ข้าพเจ้าขอรับรองว่าข้อมูลทั้งหมดที่ข้าพเจ้าได้ส่งมอบไปนี้เป็นข้อมูลที่เป็นจริงและถูกต้องตามกฎหมาย และข้าพเจ้ายินยอมรับผิดชอบต่อข้อมูลดังกล่าวในกรณีที่มีการตรวจสอบหรือทราบว่าข้อมูลดังกล่าวไม่ถูกต้องหรือมีความผิดปกติใด ๆ ที่เกิดขึ้นในภายหลังนี้
                      <br />  <i data-feather="check-square"  class="icon-check"></i> ข้าพเจ้ารับทราบว่าการให้ข้อมูลที่ไม่ถูกต้องหรือเท็จสามารถทำให้เกิดความเสียหายต่อบุคคลอื่นหรือองค์กรได้ และข้าพเจ้ายินยอมรับผิดชอบตามกฎหมายที่เกี่ยวข้องในกรณีที่เกิดความเสียหายดังกล่าว </span>
                     
                      <hr>
                      <!-- <center>  -->
                      <div class="form-check d-flex justify-content-center">
                        <input class="form-check-input custom-checkbox-con" type="checkbox" value="" id="flexCheckDefault" >
                        <label class="form-check-label" for="flexCheckDefault">
                         &nbsp; ข้าพเจ้ายอมรับเงื่อนไขตามที่กำหนด
                        </label>
                      </div>
                      <!-- </center> -->


                    </div>
                    <!-- <div class="col ">
                      3 of 3
                    </div> -->
                  </div>
                </div>

                </div>
                <hr>
                  <div class="btn_final"></div>
                  <!-- <input type="submit"  id="btn_test" value="ปุ่ม Button"> -->

                <div class="g-recaptcha btn_final" data-sitekey="6LdVdFMpAAAAAM7RB-49GpGD4YXlydl8kN1wzhT5" data-callback="enableSubmitButton" data-expired-callback="disableSubmitButton"></div>
                <div class="btn_final justify-content-end pt-2">
                  <!-- <button type="button" class="btn btn btn-outline-warning btn-lg font-sm" >กลับ</button> -->
                  <button type="button" class="btn btn-success ms-2 " id="btn_submit" disabled>ยืนยันส่งให้พังเมืองตรวจ</button>
                </div>

              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:#FF0000">กรุณาอ่านและยอมรับข้อตกลงและเงื่อนไข ก่อนกดปุ่ม “ยินยอม” </h5>
                <button type="button" class="btn-close closeButtonModal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>"เพื่อให้เป็นไปตามพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562 สำนักงานโยธาธิการและผังเมืองจังหวัดอุตรดิตถ์ และบริษัทในเครือ ผู้ควบคุมข้อมูลส่วนบุคคล ” 
                  มีความจำเป็นต้องขอความยินยอมและแจ้งถึงวัตถุประสงค์ในการประมวลผลข้อมูลส่วนบุคคลให้ท่านในฐานะเจ้าของข้อมูลส่วนบุคคลทราบ ภายใต้การเก็บรักษาข้อมูลส่วนบุคคลของท่านไว้เป็นความลับด้วยมาตรฐานการรักษาความมั่นคงปลอดภัยที่เหมาะสม"</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" id="Button_agree">ยินยอม</button>
                <button type="button" class="btn btn-outline-danger closeButtonModal" data-bs-dismiss="modal">ไม่ยินยอม</button>
            </div>
        </div>
    </div>
</div>



<script>



var check_Consent =""
document.addEventListener('DOMContentLoaded', function () { // myModal ยินยอม/ไม่ยินยอม
    var Button_agree = document.getElementById('Button_agree');
    var closeButtonElements = document.querySelectorAll('.closeButtonModal');
    var checkbox = document.getElementById('flexCheckDefault');
    var myModal = new bootstrap.Modal(document.getElementById('myModal'));

    checkbox.addEventListener('change', function () {
        if (this.checked) {
            myModal.show();
        } else {
            myModal.hide();
        }
    });

    function handleClose() {
        checkbox.checked = false;
        myModal.hide();
        check_Consent = "";
    }

    Button_agree.addEventListener('click', function () {
        checkbox.checked = true;
        checkbox.disabled = true;
        myModal.hide();
        check_Consent = "Consent";

        
    });

    closeButtonElements.forEach(function (closeButton) {
        closeButton.addEventListener('click', handleClose);
    });
});


//------------------test




let imageSets = 0;
// สร้าง FormData
var formData_land_deed = new FormData();

let formDataArray = []; // สร้าง array เพื่อเก็บข้อมูล formData




// let imageSets = 0;
// กำหนดขนาดไฟล์สูงสุดที่อนุญาต (เช่น 5 MB)
const maxSizeInBytes = 3 * 1024 * 1024; // 5 MB


function addImageSet() {
  if (imageSets >= 10) {
    alert("คุณอัพโหลดภาพครบจำนวนสูงสุดแล้ว");
    return;
  }

  
  const container = document.getElementById("imageContainer");

  const imageSet = document.createElement("div");
  imageSet.className = "image-set";

  const formData = new FormData();

  const landNumberDiv = document.createElement("div");
  landNumberDiv.className = "input-container col-sm-10";
  const landNumberLabel = document.createElement("label");
  landNumberLabel.textContent = "โฉนดที่ดินเลขที่";
  landNumberLabel.className = "input-label ";
  const landNumberInput = document.createElement("input");
  landNumberInput.type = "text";
  // landNumberInput.id = "landNumberInput"; // เพิ่ม id นี้
  landNumberInput.className = "input-field check_landNumberInput";
  landNumberInput.addEventListener("input", function() {
        this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10); 
        formData.set('landNumber', this.value); 
      });
  landNumberDiv.appendChild(landNumberLabel);
  landNumberDiv.appendChild(landNumberInput);

  const landPlotDiv = document.createElement("div");
  landPlotDiv.className = "input-container col-sm-10";
  const landPlotLabel = document.createElement("label");
  landPlotLabel.textContent = "เลขที่ดิน";
  landPlotLabel.className = "input-label";
  const landPlotInput = document.createElement("input");
  landPlotInput.type = "text";
  // landPlotInput.id = "landPlotInput"; // เพิ่ม id นี้
  landPlotInput.className = "input-field check_landPlotInput";
  landPlotInput.addEventListener("input", function() {
        this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10); 
        formData.set('landPlot', this.value); 
      });
  landPlotDiv.appendChild(landPlotLabel);
  landPlotDiv.appendChild(landPlotInput);

  const surveyNumberDiv = document.createElement("div");
  surveyNumberDiv.className = "input-container col-sm-10";
  const surveyNumberLabel = document.createElement("label");
  surveyNumberLabel.textContent = "เลขหน้าสำรวจ";
  surveyNumberLabel.className = "input-label";
  const surveyNumberInput = document.createElement("input");
  surveyNumberInput.type = "text";
  // surveyNumberInput.id = "surveyNumberInput"; // เพิ่ม id นี้
  surveyNumberInput.className = "input-field check_surveyNumberInput";
  surveyNumberInput.addEventListener("input", function() {
        this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10); 
        formData.set('surveyNumber', this.value); 
      });
  surveyNumberDiv.appendChild(surveyNumberLabel);
  surveyNumberDiv.appendChild(surveyNumberInput);

  const frontDiv = document.createElement("div");
  frontDiv.className = "input-container col-sm-10";
  const frontLabel = document.createElement("label");
  frontLabel.textContent = "รูปด้านหน้า";
  frontLabel.className = "input-label";
  const frontInput = document.createElement("input");
  frontInput.type = "file";
  // frontInput.id = "frontInput"; // เพิ่ม id นี้
  frontInput.accept = "image/*";
  frontInput.className = "form-control frontInput";
  frontInput.addEventListener("change", function(event) {
    handleFileSelect(event, "front", imageSet, formData);
  });
  frontDiv.appendChild(frontLabel);
  frontDiv.appendChild(frontInput);

  const backDiv = document.createElement("div");
  backDiv.className = "input-container col-sm-10 ";
  const backLabel = document.createElement("label");
  backLabel.textContent = "รูปด้านหลัง";
  backLabel.className = "input-label";
  const backInput = document.createElement("input");
  backInput.type = "file";
  // backInput.id = "backInput"; // เพิ่ม id นี้
  backInput.accept = "image/*";
  backInput.className = "form-control backInput";
  backInput.addEventListener("change", function(event) {
    handleFileSelect(event, "back", imageSet, formData);
  });
  backDiv.appendChild(backLabel);
  backDiv.appendChild(backInput);

  const deleteButton = document.createElement("button");
  deleteButton.textContent = "ลบ";
  deleteButton.className = "btn btn-danger delete-button";
  deleteButton.onclick = function() {
    const index = formDataArray.indexOf(formData); 
    if (index !== -1) {
      formDataArray.splice(index, 1); 
    }
    container.removeChild(imageSet); 
    imageSets--; 
  };

  imageSet.appendChild(deleteButton);
  imageSet.appendChild(landNumberDiv);
  imageSet.appendChild(landPlotDiv);
  imageSet.appendChild(surveyNumberDiv);
  imageSet.appendChild(frontDiv);
  imageSet.appendChild(backDiv);
  container.appendChild(imageSet);

  formData.append('landNumber', landNumberInput.value);
  formData.append('landPlot', landPlotInput.value);
  formData.append('surveyNumber', surveyNumberInput.value);

  formDataArray.push(formData);
  imageSets++;

  
}

function handleFileSelect(event, side, imageSet, formData) {
  
    const file = event.target.files[0];
    const reader = new FileReader();

  if (!event.target.files || event.target.files.length === 0) { 
    // ลบรูปภาพที่มีอยู่แล้ว
    const existingImage = imageSet.querySelector(`.preview-image-${side}`);
    if (existingImage) {
      imageSet.removeChild(existingImage); 
      formData.delete(`${side}Image`); 
    }
    return;
  }


  // ตรวจสอบขนาดของไฟล์ก่อนที่จะอัปโหลด
  if (file.size > maxSizeInBytes) { 
    alert('ไฟล์ที่เลือกมีขนาดใหญ่เกินไป โปรดเลือกไฟล์ที่มีขนาดไม่เกิน 3 MB');
    event.target.value = null;
    const existingImage = imageSet.querySelector(`.preview-image-${side}`);
    if (existingImage) {
      imageSet.removeChild(existingImage); 
      formData.delete(`${side}Image`); 
    }
    return;
  }



  if (!file) { 
    const existingImage = imageSet.querySelector(`.preview-image-${side}`);
    if (!existingImage) {
      return; 
    } else {
      imageSet.removeChild(existingImage); 
      formData.delete(`${side}Image`); 
      return;
    }
  }


  const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png']; 

  if (!allowedTypes.includes(file.type)) { 
    alert('โปรดเลือกไฟล์ที่มีประเภทเป็น jpg, jpeg หรือ png เท่านั้น');
    event.target.value = null; 
    const existingImage = imageSet.querySelector(`.preview-image-${side}`);
    if (existingImage) {
      imageSet.removeChild(existingImage); 
      formData.delete(`${side}Image`); 
    }
    return;
  }

  reader.onload = function(e) {
    const image = document.createElement("img");
    image.className = "preview-image";
    image.src = e.target.result;
    image.classList.add(`preview-image-${side}`);

    const existingImage = imageSet.querySelector(`.preview-image-${side}`);
    const backImage = imageSet.querySelector('.preview-image-back');

    if (existingImage) {
      imageSet.replaceChild(image, existingImage);
    } else {
      if (backImage && side === 'front') {
        imageSet.insertBefore(image, backImage);
      } else {
        imageSet.appendChild(image);
      }
    }
  };

  if (file) {
    reader.readAsDataURL(file);
    formData.set(`${side}Image`, file); 
  } else {
    const existingImage = imageSet.querySelector(`.preview-image-${side}`);
    if (existingImage) {
      imageSet.removeChild(existingImage);
      formData.delete(`${side}Image`); 
    }
  }
}















//------------------test












// var formData = new FormData();
// var formData_land_deed = new FormData();


var MAX_FILE_SIZE_MB = 2; // ขนาดไฟล์สูงสุดที่อนุญาต (MB)

function checkFileSize(file) {
    var fileSizeMB = file.size / (1024 * 1024); // แปลงขนาดไฟล์เป็น MB
    return fileSizeMB <= MAX_FILE_SIZE_MB;
}

// เพิ่มตัวแปรเพื่อเก็บข้อมูลรูปภาพ
var imageFiles = [];

var uniqueFileNames = new Set();


function showImages() {
    var copy_company_certificate = document.getElementById('copy_company_certificate');
    var imageContainer = document.getElementById('image-container');
    var showUploadStatus = document.getElementById('showUploadStatus');

    if (copy_company_certificate.files.length > 0) {
        var files = copy_company_certificate.files;

        for (let i = 0; i < files.length; i++) {
            var file = files[i];

            if (checkFileSize(file) && isValidImageFile(file)) {
                // ตรวจสอบว่าชื่อไฟล์ซ้ำหรือไม่
                if (!uniqueFileNames.has(file.name)) {
                    uniqueFileNames.add(file.name);

                    var reader = new FileReader();
                    reader.onload = function (e) {
                        showImageInContainer(e.target.result, file.name);
                    };
                    reader.readAsDataURL(file);

                    // เพิ่มข้อมูลลงใน imageFiles
                    imageFiles.push(file);
                } else {
                    // Swal.fire({
                    //   title: "อัปโหลดไม่สำเร็จ: ชื่อไฟล์ซ้ำ",
                    //   // text: "อัปโหลดไม่สำเร็จ: ชื่อไฟล์ซ้ำ",
                    //   icon: "warning",
                    //   showConfirmButton: false
                    // });
                    alert("อัปโหลดไม่สำเร็จ: ชื่อไฟล์ซ้ำ");
                    $("#copy_company_certificate").val("");
                    return;
                }
            } else {
                alert("อัปโหลดไม่สำเร็จ: ไฟล์ไม่รองรับหรือขนาดใหญ่เกินไป");
                // alert("อัปโหลดไม่สำเร็จ: ไฟล์ไม่รองรับ");
                $("#copy_company_certificate").val("");
                return;
            }
        }

        // แสดงข้อความ upload status
        showUploadStatus.innerHTML = 'อัปโหลดรูปสำเร็จ';
    }
}


function showImageInContainer(imageUrl, filename) {
    var imageContainer = document.getElementById('image-container');
    var imageItem = document.createElement('div');
    imageItem.className = 'image-item';

    var img = document.createElement('img');
    img.src = imageUrl;
    img.style.width = '300px';
    img.style.height = 'auto';

    const deleteIcon = document.createElement('span');
    deleteIcon.className = 'delete-icon';
    deleteIcon.innerHTML = '❌';
    deleteIcon.onclick = function () {
        imageContainer.removeChild(imageItem);

        if (imageContainer.childElementCount === 0) {
            showUploadStatus.innerHTML = '';
            $("#copy_company_certificate").val("");
        }

        // ลบรูปออกจาก imageFiles
        removeFileFromImageFiles(filename);
    };

    imageItem.appendChild(img);
    imageItem.appendChild(deleteIcon);
    imageContainer.appendChild(imageItem);
}

function isValidImageFile(file) {
    // ตรวจสอบประเภทของไฟล์
    return /\.(jpg|jpeg|png)$/i.test(file.name);
}

function removeFileFromImageFiles(filename) {
    // ลบชื่อไฟล์ออกจาก Set
    uniqueFileNames.delete(filename);

    // กรองข้อมูลใน imageFiles โดยไม่รวมไฟล์ที่ต้องการลบ
    imageFiles = imageFiles.filter(file => file.name !== filename);
    console.log("imageFiles after deletion:", imageFiles);
}

// เพื่อให้ FormData รวมข้อมูลรูปภาพทั้งหมด
function getFormDataWithImages() {
    var formData = new FormData();

    imageFiles.forEach(file => {
        formData.append('files[]', file, file.name);
    });

    return formData;
}




// function removeFileFromFormData(filename) {
//     for (const entry of formData_land_deed.entries()) {
//         const [key, file] = entry;
//         if (file.name === filename) {
//             formData_land_deed.delete(key);
//             console.log(`Deleting file with name: ${file.name}`);
//             break;
//         }
//     }
// }


// function showUploadStatus(message, color) {
//     var uploadStatus = document.createElement('showUploadStatus');
//     uploadStatus.innerText = message;
//     uploadStatus.className = 'upload-status';
//     uploadStatus.style.color = color;

//     document.body.appendChild(uploadStatus);
// }

function hideUploadStatus() {
    var uploadStatus = document.querySelector('.upload-status');
    if (uploadStatus) {
        uploadStatus.remove();
    }
}


// document.getElementById('ID_card_Copy').addEventListener('change', function (e) {
//       var input = e.target;
//       var reader = new FileReader();

//       reader.onload = function () {
//           var imageContainer = document.getElementById('imageContainer');
//           var selectedImage = document.getElementById('selectedImage');

//           selectedImage.src = reader.result;
//           imageContainer.style.display = 'block';
//       };

//       reader.readAsDataURL(input.files[0]);
// });


function setupImagePreview(inputId, containerId, statusId) {
    var input = document.getElementById(inputId);
    var container = document.getElementById(containerId);
    var statusSpan = document.getElementById(statusId);

    input.addEventListener('change', function (e) {
        var copy_company_certificate = e.target;
        
        // เพิ่มตรวจสอบขนาดไฟล์ที่นี่
        for (var i = 0; i < copy_company_certificate.files.length; i++) {
            var file = copy_company_certificate.files[i];

            if (!checkFileSize(file)) {
                alert("ไฟล์มีขนาดใหญ่เกินไป (ไม่เกิน 3 MB)");
                input.value = ""; // ล้างค่าไฟล์ที่ถูกเลือก
                container.innerHTML = ''; // ลบรูปที่มีอยู่ใน container อันเดิม (ถ้ามี)
                statusSpan.innerText = '';
                return;
            }
        }

        var reader2 = new FileReader();

        reader2.onload = function () {
            var img = document.createElement('img');
            img.className = 'selected-image';
            img.src = reader2.result;
            container.innerHTML = ''; // ลบรูปที่มีอยู่ใน container อันเดิม (ถ้ามี)

            container.appendChild(img);
            container.style.display = 'block';

            // แสดงข้อความ "อัปโหลดสำเร็จ"
            statusSpan.innerText = 'อัปโหลดสำเร็จ';
        };

        for (var i = 0; i < copy_company_certificate.files.length; i++) {
            reader2.readAsDataURL(copy_company_certificate.files[i]);
        }
    });
}

// Setup for the first image input
setupImagePreview('ID_card_Copy', 'showimg_ID_card_Copy', 'showUploadStatus2');
setupImagePreview('house_regis_Copy', 'showimg_house_regis_Copy', 'showUploadStatus3');
// setupImagePreview('company_certificate', 'showimg_company_certificate', 'showUploadStatus4');
setupImagePreview('Other_documents_Copy', 'showimg_Other_documents_Copy', 'showUploadStatus5');


function handleFileSelection(id_Copy_value) { //ลบรูปที่แสดงและ statusSpan 'อัปโหลดสำเร็จ' ของเอกสารขอตรวจการใช้ประโยชน์ที่ดิน ยกเว้นสำเนาโฉนดที่ดิน

  if(id_Copy_value == 'ID_card_Copy'){
    var copy_company_certificate = document.getElementById(id_Copy_value);
    var files = copy_company_certificate.files;
    var container_showimg = document.getElementById('showimg_ID_card_Copy');
    // ตรวจสอบว่ามีไฟล์ที่ถูกเลือกหรือไม่
    if (files.length === 0) {
        // ถ้าไม่มีไฟล์ที่ถูกเลือก ลบรูปที่แสดงและ statusSpan 'อัปโหลดสำเร็จ'
        showUploadStatus2.innerHTML = '';
        container_showimg.innerHTML = '';
    }
    for (var i = 0; i < files.length; i++) {
        if (!isValidImageFile(files[i])) {
            alert("อัปโหลดไม่สำเร็จ: ไฟล์ไม่รองรับ");
            // input.innerHTML = '';
            // เพิ่มโค้ดเพื่อล้างไฟล์ที่ไม่รองรับ (ตามความต้องการ)
            showUploadStatus2.innerHTML = '';
            container_showimg.innerHTML = '';
            // copy_land_deed.value = null;
            copy_company_certificate.value = "";
            return;
        }
    }
    
  }
  else if (id_Copy_value == 'house_regis_Copy'){
    var copy_company_certificate = document.getElementById(id_Copy_value);
    var files = copy_company_certificate.files;
    var container_showimg = document.getElementById('showimg_house_regis_Copy');
    // ตรวจสอบว่ามีไฟล์ที่ถูกเลือกหรือไม่
    if (files.length === 0) {
        // ถ้าไม่มีไฟล์ที่ถูกเลือก ลบรูปที่แสดงและ statusSpan 'อัปโหลดสำเร็จ'
        showUploadStatus3.innerHTML = '';
        container_showimg.innerHTML = '';
    }
    for (var i = 0; i < files.length; i++) {
        if (!isValidImageFile(files[i])) {
            alert("อัปโหลดไม่สำเร็จ: ไฟล์ไม่รองรับ");
            // input.innerHTML = '';
            // เพิ่มโค้ดเพื่อล้างไฟล์ที่ไม่รองรับ (ตามความต้องการ)
            showUploadStatus3.innerHTML = '';
            container_showimg.innerHTML = '';
            // copy_land_deed.value = null;
            copy_company_certificate.value = "";
            return;
        }
    }
  }
  // else if (id_Copy_value == 'company_certificate'){
  //   var copy_land_deed = document.getElementById(id_Copy_value);
  //   var files = copy_land_deed.files;
  //   var container_showimg = document.getElementById('showimg_company_certificate');
  //   // ตรวจสอบว่ามีไฟล์ที่ถูกเลือกหรือไม่
  //   if (files.length === 0) {
  //       // ถ้าไม่มีไฟล์ที่ถูกเลือก ลบรูปที่แสดงและ statusSpan 'อัปโหลดสำเร็จ'
  //       showUploadStatus4.innerHTML = '';
  //       container_showimg.innerHTML = '';
  //   }
  //   for (var i = 0; i < files.length; i++) {
  //       if (!isValidImageFile(files[i])) {
  //           alert("อัปโหลดไม่สำเร็จ: ไฟล์ไม่รองรับ");
  //           // input.innerHTML = '';
  //           // เพิ่มโค้ดเพื่อล้างไฟล์ที่ไม่รองรับ (ตามความต้องการ)
  //           showUploadStatus4.innerHTML = '';
  //           container_showimg.innerHTML = '';
  //           // copy_land_deed.value = null;
  //           copy_land_deed.value = "";
  //           return;
  //       }
  //   }
  // }
  else if (id_Copy_value == 'Other_documents_Copy'){
    var copy_company_certificate = document.getElementById(id_Copy_value);
    var files = copy_company_certificate.files;
    var container_showimg = document.getElementById('showimg_Other_documents_Copy');
    // ตรวจสอบว่ามีไฟล์ที่ถูกเลือกหรือไม่
    if (files.length === 0) {
        // ถ้าไม่มีไฟล์ที่ถูกเลือก ลบรูปที่แสดงและ statusSpan 'อัปโหลดสำเร็จ'
        showUploadStatus5.innerHTML = '';
        container_showimg.innerHTML = '';
    }
    for (var i = 0; i < files.length; i++) {
        if (!isValidImageFile(files[i])) {
            alert("อัปโหลดไม่สำเร็จ: ไฟล์ไม่รองรับ");
            // input.innerHTML = '';
            // เพิ่มโค้ดเพื่อล้างไฟล์ที่ไม่รองรับ (ตามความต้องการ)
            showUploadStatus5.innerHTML = '';
            container_showimg.innerHTML = '';
            // copy_land_deed.value = null;
            copy_company_certificate.value = "";
            return;
        }
    }
  }
  
}

// setup_null_value();

// function setup_null_value() {

//   ID_card_setup_null = $('#ID_card_Copy').val();
  
//   if(ID_card_setup_null == ""){
//     alert("gg")
//   }

// }



// document.getElementById('image').addEventListener('change', function (e) {
//     var input = e.target;
//     var reader = new FileReader();

//     reader.onload = function () {
//         var imageContainer = document.getElementById('imageContainer');
//         var selectedImage = document.getElementById('selectedImage');

//         selectedImage.src = reader.result;
//         imageContainer.style.display = 'block';
//     };

//     reader.readAsDataURL(input.files[0]);
// });

        
$(document).ready(function() {
    $('.js-example-basic-single').select2({
      // selectOnClose: true
    });
});


var CompanyChecked = 0;
function toggleCompany() {
    var companyCheckbox_id = document.getElementById("company");
    // var companyLabel = document.getElementById("companyLabel");

    if (companyCheckbox_id.checked) {
      // เมื่อ checkbox ถูกติก
      // ทำการแก้ไข HTML ตามที่คุณต้องการ
      // $('#genderInputs').hide();
      $('#companyInput').show();
      $('#company_Copy').show();
      CompanyChecked = 1;

      // alert(CompanyChecked);
    } else {
      // เมื่อ checkbox ไม่ถูกติก
      // ทำการแก้ไข HTML ตามที่คุณต้องการ
      // $('#genderInputs').show();
      $('#companyInput').hide();
      $('#company_Copy').hide();
      CompanyChecked = 0;
      // alert(CompanyChecked);

    }
}


//เวลาเลือกคำนำหน้าให้เลือกเพศเอง
// $('#title_name').change(function() {
//   var namePrefix = $(this).val();
//   // alert(namePrefix);
//   // ตั้งค่า checked ตามคำนำหน้าที่เลือก
//   if (namePrefix === 'นาย') {
//       $('#male').prop('checked', true);
//       $('#female').prop('checked', false);
//   } else if (namePrefix === 'นาง' || namePrefix === 'นางสาว') {
//       $('#male').prop('checked', false);
//       $('#female').prop('checked', true);
//   } else {
//       // คำนำหน้าไม่ระบุ ล้างการตั้งค่า checked
//       $('#male').prop('checked', false);
//       $('#female').prop('checked', false);
//   }

// });

$('#firstname_disabled').hide();
$('#lastname_disabled').hide();
$('#ID_card_disabled').hide();//disabled ไปก่อนเลย
$('#title_name').change(function () {
    var namePrefix = $(this).val();
    // Check if the selected value is 'บริษัท'
    if (namePrefix === 'บริษัท') {
      // Hide radio inputs and show the text input for the company name
      // $('#genderInputs').hide();
      // $('#companyInput').show();
      // $('#del_sex').hide();
      // $('#firstname').hide();
      // $('#firstname_disabled').show();
      // $('#lastname').hide();
      // $('#lastname_disabled').show();
      // $('#ID_card').hide();
      // $('#ID_card_disabled').show();
      // $('#result').hide();
     

    } else {
      // Show radio inputs and hide the text input for the company name
      // $('#del_sex').show();
      // $('#genderInputs').show();
      // $('#companyInput').hide();
      // $('#firstname_disabled').hide();
      // $('#firstname').show();
      // $('#lastname_disabled').hide();
      // $('#lastname').show();
      // $('#ID_card_disabled').hide();
      // $('#ID_card').show();
      // $('#result').show();//alert รูปแบบ ID_card

      // Set the checked status based on the selected name prefix
      if (namePrefix === 'นาย') {
        $('#male').prop('checked', true);
        $('#female').prop('checked', false);
      } else if (namePrefix === 'นาง' || namePrefix === 'นางสาว') {
        $('#male').prop('checked', false);
        $('#female').prop('checked', true);
      } else {
        // No prefix selected, clear the checked status
        $('#male, #female').prop('checked', false);
      }
    }
  });


//เซ็คข้อมูลว่ามีไหม input
function checkData(inputId) {
  if(inputId == "phone_user"){ //รับข้อมูล id แต่ละ input
    // oninput="this.value = this.value.replace(/[^0-9]/g, '');"
    var inputElement = document.getElementById(inputId);
    var inputData = inputElement.value;
    
    inputElement.value = inputData.replace(/[^0-9]/g, ''); // ตรวจสอบและกำหนดค่าให้เป็นตัวเลขเท่านั้น

    if (isValidData2(inputData)) {
        inputElement.classList.remove('error_text'); // เปลียนสีตาม sty
        inputElement.classList.add('success_text');
    } else {
        inputElement.classList.remove('success_text');
        inputElement.classList.add('error_text');
    } 
  } else if(inputId == "ID_card") { //ตรงนี้ไม่ได้่ใช้-----------------------เพื่อไว้--------------
    var inputElement = document.getElementById(inputId);
    var inputData = inputElement.value;
    
    inputElement.value = inputData.replace(/[^0-9]/g, ''); // ตรวจสอบและกำหนดค่าให้เป็นตัวเลขเท่านั้น

    if (isValidData3(inputData)) {
        inputElement.classList.remove('error_text');
        inputElement.classList.add('success_text');
    } else {
        inputElement.classList.remove('success_text');
        inputElement.classList.add('error_text');
    } 
  } else {
    var inputData = document.getElementById(inputId).value;
    var inputElement = document.getElementById(inputId);

  // ตรวจสอบว่าข้อมูลถูกต้องหรือไม่
  if (isValidData(inputData)) {
      inputElement.classList.remove('error_text');
      inputElement.classList.add('success_text');
  } else {
      inputElement.classList.remove('success_text');
      inputElement.classList.add('error_text');
  }

  }
  
}

function isValidData(data) {
    // ตรวจสอบข้อมูลตามเงื่อนไข
    return data.length != "";
}
function isValidData2(data) {
    // ตรวจสอบข้อมูลตามเงื่อนไข
    return data.length >= 10;
}
function isValidData3(data) {
    // ตรวจสอบข้อมูลตามเงื่อนไข
    return data.length >= 13;
}

ID_card_db = "";
ID_card_if = 0;

function restrictToNumeric(input_data) {  //พิมได้แค่ตัวเลข
  var inputElement = document.getElementById(input_data);
  inputElement.value = inputElement.value.replace(/[^0-9]/g, '');
}
// function restrictToNumeric() { //เอาเลขเลขบัตรประชาชนมาคำนวนย
//   var inputElement = document.getElementById('ID_card');
//   inputElement.value = inputElement.value.replace(/[^0-9]/g, '');
// }

function checkIdCard() { //เอาเลขเลขบัตรประชาชนมาคำนวน
  var idCardInput = document.getElementById('ID_card');
  var resultDiv = document.getElementById('result');
  
  // ตรวจสอบว่า input มีค่าหรือไม่
  if (idCardInput.value.trim() !== '') {
      // ดำเนินการตรวจสอบรูปแบบที่ต้องการที่นี่
      
      var isValid = validateIdCardFormat(idCardInput.value);

      // แสดงผลลัพธ์
      if (isValid) {
          resultDiv.innerHTML = '';
          idCardInput.className = 'form-control success_text';
          ID_card_db = $('#ID_card').val();
          ID_card_if = 1;
          // alert(ID_card_if);
      } else {
          resultDiv.innerHTML = 'รูปแบบไม่ถูกต้อง';
          idCardInput.className = 'form-control error_text';
          ID_card_db = "";
          ID_card_if = 0;
          // alert(ID_card_if);
      }
  } else {
      resultDiv.innerHTML = ''; // ลบผลลัพธ์ที่แสดง
      idCardInput.className = 'form-control'; // ลบ class ของ input
  }
}

function validateIdCardFormat(idCard) { // ตรวจสอบค่าเลขบัตรประชาชน 13 หลัก
            
    var num_id = idCard;
    var group_1 = num_id.substring(0, 1); // ดึงเอาเลขเลขตัวที่ 1 ของบัตรประชาชนออกมา
    var group_5 = num_id.substring(12, 24);  // ดึงเอาเลขเลขตัวที่ 13 ของบัตรประชาชนออกมา

    var num1 = group_1;
    var num2 = num_id.substring(1, 2); // ดึงเอาเลขเลขตัวที่ 2 ของบัตรประชาชนออกมา
    var num3 = num_id.substring(2, 3); // ดึงเอาเลขเลขตัวที่ 3 ของบัตรประชาชนออกมา
    var num4 = num_id.substring(3, 4); // ดึงเอาเลขเลขตัวที่ 4 ของบัตรประชาชนออกมา
    var num5 = num_id.substring(4, 5); // ดึงเอาเลขเลขตัวที่ 5 ของบัตรประชาชนออกมา
    var num6 = num_id.substring(5, 6); // ดึงเอาเลขเลขตัวที่ 6 ของบัตรประชาชนออกมา
    var num7 = num_id.substring(6, 7); // ดึงเอาเลขเลขตัวที่ 7 ของบัตรประชาชนออกมา
    var num8 = num_id.substring(7, 8); // ดึงเอาเลขเลขตัวที่ 8 ของบัตรประชาชนออกมา
    var num9 = num_id.substring(8, 9); // ดึงเอาเลขเลขตัวที่ 9 ของบัตรประชาชนออกมา
    var num10 = num_id.substring(9, 10); // ดึงเอาเลขเลขตัวที่ 10 ของบัตรประชาชนออกมา
    var num11 = num_id.substring(10, 11); // ดึงเอาเลขเลขตัวที่ 11 ของบัตรประชาชนออกมา
    var num12 = num_id.substring(11, 12); // ดึงเอาเลขเลขตัวที่ 12 ของบัตรประชาชนออกมา
    var num13 = group_5;

    // จากนั้นนำเลขที่ได้มาคูณกันดังนี้
    var cal_num1 = num1 * 13; // เลขตัวที่ 1 ของบัตรประชาชน
    var cal_num2 = num2 * 12; // เลขตัวที่ 2 ของบัตรประชาชน
    var cal_num3 = num3 * 11; // เลขตัวที่ 3 ของบัตรประชาชน
    var cal_num4 = num4 * 10; // เลขตัวที่ 4 ของบัตรประชาชน
    var cal_num5 = num5 * 9; // เลขตัวที่ 5 ของบัตรประชาชน
    var cal_num6 = num6 * 8; // เลขตัวที่ 6 ของบัตรประชาชน
    var cal_num7 = num7 * 7; // เลขตัวที่ 7 ของบัตรประชาชน
    var cal_num8 = num8 * 6; // เลขตัวที่ 8 ของบัตรประชาชน
    var cal_num9 = num9 * 5; // เลขตัวที่ 9 ของบัตรประชาชน
    var cal_num10 = num10 * 4; // เลขตัวที่ 10 ของบัตรประชาชน
    var cal_num11 = num11 * 3; // เลขตัวที่ 11 ของบัตรประชาชน
    var cal_num12 = num12 * 2; // เลขตัวที่ 12 ของบัตรประชาชน

    // นำผลลัพธ์ทั้งหมดจากการคูณมาบวกกัน
    var cal_sum = cal_num1 + cal_num2 + cal_num3 + cal_num4 + cal_num5 + cal_num6 + cal_num7 + cal_num8 + cal_num9 + cal_num10 + cal_num11 + cal_num12;

    // นำผลบวกมาหาร 11 เพื่อหาเศษส่วน
    var cal_mod = cal_sum % 11;

    // นำ 11 ลบ กับส่วนที่เหลือจากการ modulation
    var cal_2 = 11 - cal_mod;
    var cal_2_as_string = cal_2.toString();//แปลงเป็นสตริงเพราะ slice เอาตัวสุดท้ายของอักษรไม่ได้ กรณี "10"
    var cal_22 = cal_2_as_string.slice(-1);
    
    // ถ้าหากเลขที่ได้มีค่าเท่ากับเลขสุดท้ายของเลขบัตรประชาชน ถูกต้อง
    if (cal_22 == num13) {

      // console.log(cal_22);
      // console.log(num13);
      // alert(cal_2)
      // alert(num13)
        return true;
    } else {
      console.log(cal_22);
      // console.log(num13);
      // alert(cal_2)
      // alert(num13)
        return false;
    }
}

function loadSubdistricts() { //เลือกเอาเภอแล้วส่ง id ตำบล พร้อมแสดง option ของตำบล
  
  var amphureId = $("#amphure").val();

  if(amphureId != ""){

    $.ajax({
      url: "<?php echo base_url('admin/getSubdistricts/'); ?>" + amphureId,
      type: "GET",
      dataType: "json",
      success: function(data) {
          // console.log(data)
          var subdistrictSelect = $("#tambonsid");
          subdistrictSelect.empty();

          subdistrictSelect.append('<option selected  value="">เลือก</option>');
          $.each(data, function(index, subdistrict) {
              subdistrictSelect.append('<option value="' + subdistrict.tambons_id + '">' + subdistrict.name_th + '</option>');
          });
          $("#zip_code").val("รหัสไปรษณีย์");
          var inputElement = document.getElementById("tambonsid");
          inputElement.classList.remove('success_text');
          inputElement.classList.add('error_text');   
          
      }
    });

  } else{
      $("#zip_code").val("รหัสไปรษณีย์");
      document.getElementById("tambonsid").value = "";

      var inputElement = document.getElementById("tambonsid");
      inputElement.classList.remove('success_text');
      inputElement.classList.add('error_text');

      $(document).ready(function(){
            // เลือกตัวเลือกที่ไม่ถูกเลือก
            $("#tambonsid option:not(:selected)").remove();
      });
  }
}

function displayPostalCode() { //นำค่า id ตำบลมาแล้ว แสดง
  var tambons_code = $("#tambonsid").val();
  if(tambons_code != ""){
    $.ajax({
      url: "<?php echo base_url('admin/getSubdistricts2/'); ?>",
      method: "POST",
      data: {
          tambons_id : $('#tambonsid').val(),
      },
      
      success: function(data){
      //   re = data.trim();
      //   alert(re);
      //   console.log(data)
      var jsonData = JSON.parse(data);
      var zipCode = jsonData[0].zip_code;
      $("#zip_code").val(zipCode);
      }
    });
    
  }   else {
    $("#zip_code").val("รหัสไปรษณีย์");
    
  }

}


$(document).ready(function() {
        var url = "<?php echo base_url('admin/today_thai/'); ?>"; // สร้าง URL ด้วย PHP และนำมาใช้ใน JavaScript
        $.ajax({
            url: url, // ใช้ URL ที่สร้างด้วย PHP
            method: "POST",
            success: function(data) {
                $('#today').val(data);
            }
        });
    });


var check_emailRadio = '';
window.onload = function() { //เมื่อติ๊กให้ส่งไปทางอีเมล
    toggleEmailInput();

    var radios = document.getElementsByName('receive_documents');
    radios.forEach(function(radio) {
        radio.addEventListener('change', toggleEmailInput);
    });
}

function toggleEmailInput() { //เมื่อติ๊กให้ส่งไปทางอีเมล
    var emailInputContainer = document.getElementById('emailInputContainer');
    var receiveRadio = document.getElementById('receive_documents1'); // เพิ่มบรรทัดนี้
    var emailRadio = document.getElementById('receive_documents2');

    if (emailRadio.checked) {
        // ถ้ารับทาง e-mail ถูกติ๊ก
        emailInputContainer.style.display = 'block';
        check_emailRadio = "check";
        // alert(check_emailRadio);
    } else if (receiveRadio.checked) {
        // ถ้า radio อื่นๆ ถูกติ๊ก
        emailInputContainer.style.display = 'none';
        check_emailRadio = "check_receiveRadio";
        // alert(check_emailRadio);
    } else {
        // ถ้าไม่มี radio ไหนถูกติ๊ก
        emailInputContainer.style.display = 'none';
        check_emailRadio = "no_check";
        // alert(check_emailRadio);
    }
}

var check_email = "";
document.addEventListener('DOMContentLoaded', function() { //ตรวจสอบรูปแบบอีเมลว่าถูกต้องหรือไหม
    
    var emailInput = document.getElementById('email');
    var errorMessage = document.getElementById('email-error-message');

    emailInput.addEventListener('input', function() {
        if (emailInput.value.trim() === '' || validateEmail(emailInput.value)) {
            errorMessage.style.display = 'none';
            check_email = "check_pass";
            // alert("000");
        } else {
            errorMessage.style.display = 'block';
            check_email = "check_no_pass";
        }
    });

    function validateEmail(email) {
        // ใช้ Regular Expression สำหรับตรวจสอบรูปแบบอีเมล
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // ทำการเปรียบเทียบรูปแบบอีเมล
        return emailRegex.test(email);
    }
});



function enableSubmitButton() {
        document.getElementById('btn_submit').disabled = false;
    }

  // JavaScript function to disable the submit button when reCAPTCHA expires
function disableSubmitButton() {
    document.getElementById('btn_submit').disabled = true;
}


$("#btn_submit").click(function(e){ //ปุ่มยืนยัน
  e.preventDefault();

  // var ID_card_Copy = $('#ID_card_Copy').val();
  // var house_regis_Copy = $('#house_regis_Copy').val();

  //   if(ID_card_Copy != "" && house_regis_Copy != ""){
  //     alert(ID_card_Copy);
  //   }
  //   else{
  //     alert(ID_card_Copy+"gg");

  //   }

 
  // data_img.append('formData_land_deed', formData_land_deed);
  // data_img.append('formData_land_deed', formDataWithImages);

  // console.log(data_img);
  // for (const entry of data_img.entries()) {
  //   console.log(entry);
  // }
  // var assss = $('#ID_card_Copy')[0].files[0];
  // alert(assss);


  // alert(CompanyChecked);




  var formDataWithImages = getFormDataWithImages(); // รูปสำเนาสโฉนดที่ดิน






  if (formDataArray.length === 0) {
      alert("โปรดเพิ่มข้อมูลก่อน");
      return;
  }

  let isValid = true;

   // ตรวจสอบข้อมูลในแต่ละชุด
  $(".image-set").each(function(index, imageSet) {
    const landNumberInput = $(imageSet).find(".check_landNumberInput");
    const landPlotInput = $(imageSet).find(".check_landPlotInput");
    const surveyNumberInput = $(imageSet).find(".check_surveyNumberInput");
    const frontInput = $(imageSet).find(".frontInput");
    const backInput = $(imageSet).find(".backInput");

    // ตรวจสอบความถูกต้องของข้อมูล
    if (
      landNumberInput.val() === "" ||
      landPlotInput.val() === "" ||
      surveyNumberInput.val() === ""
    ) {
      alert("โปรดกรอกข้อมูลให้ครบทุกช่อง (ชุดที่ " + (index + 1) + ")");
      isValid = false;
      return false; // ออกจากลูปทันทีเมื่อพบข้อมูลไม่ถูกต้อง
    }

    if (frontInput[0].files.length === 0 || backInput[0].files.length === 0) {
      alert("โปรดเลือกรูปภาพทั้งสองด้าน (ชุดที่ " + (index + 1) + ")");
      isValid = false;
      return false; // ออกจากลูปทันทีเมื่อพบข้อมูลไม่ถูกต้อง
    }
  });

   // หยุดการดำเนินการถ้าข้อมูลไม่ถูกต้อง
  if (!isValid) {
    return;
  }


  // สร้างข้อมูลแต่ละชุด
  for (var i = 0; i < formDataArray.length; i++) {
      var currentFormData = formDataArray[i];
      formDataWithImages.append('landNumber_' + (i+1), currentFormData.get('landNumber'));
      formDataWithImages.append('landPlot_' + (i+1), currentFormData.get('landPlot'));
      formDataWithImages.append('surveyNumber_' + (i+1), currentFormData.get('surveyNumber'));
      formDataWithImages.append('frontImage_' + (i+1), currentFormData.get('frontImage'));
      formDataWithImages.append('backImage_' + (i+1), currentFormData.get('backImage'));
  }

  // แสดงข้อมูลใน FormData ทั้งหมด
  for (var pair of formDataWithImages.entries()) {
      console.log(pair[0] + ': ' + pair[1]);
  } 













  
  
   // รับค่า reCAPTCHA response
   var recaptchaResponse = grecaptcha.getResponse();

// console.log("FormData entries:", [...formDataWithImages.entries()]);
// console.log("Value of 'files[]' key:", formData.get('files[]'));

// var data_cpn = new FormData();

  formDataWithImages.append('CompanyChecked', CompanyChecked);
  formDataWithImages.append('company_name', $('#company_name').val());
      
  formDataWithImages.append('title_name', $('#title_name').val());
  formDataWithImages.append('firstname', $('#firstname').val());
  formDataWithImages.append('lastname', $('#lastname').val());
  formDataWithImages.append('ID_card', $('#ID_card').val());
  formDataWithImages.append('phone_user', $('#phone_user').val());
  // formDataWithImages.append('land_title_number', $('#land_title_number').val());
  // formDataWithImages.append('land_number', $('#land_number').val());
  // formDataWithImages.append('survey_page_number', $('#survey_page_number').val());
  formDataWithImages.append('amphure', $('#amphure').val());
  formDataWithImages.append('tambonsid', $('#tambonsid').val());
  formDataWithImages.append('provinces', $('#provinces').val());
  formDataWithImages.append('zip_code', $('#zip_code').val());
  formDataWithImages.append('utilization', $('#utilization').val());
  
  formDataWithImages.append('g-recaptcha-response', recaptchaResponse);

  formDataWithImages.append('ID_card_Copy', $('#ID_card_Copy')[0].files[0]);
  formDataWithImages.append('house_regis_Copy', $('#house_regis_Copy')[0].files[0]);
  // formDataWithImages.append('company_certificate', $('#company_certificate')[0].files[0]);
  formDataWithImages.append('Other_documents_Copy', $('#Other_documents_Copy')[0].files[0]);


 
  // หา radio button ที่ถูกติ๊ก
  var radios = document.getElementsByName('receive_documents');
  var selectedRadioValue = "0";

  // วนลูปเพื่อหา radio button ที่ถูกติ๊ก
  for (var i = 0; i < radios.length; i++) {
      if (radios[i].checked) {
          selectedRadioValue = radios[i].value;
          break;
      }
  }

  var check_email_last = "";
  if(selectedRadioValue == "2"){
    var email = $('#email').val();
    if(check_email == "check_pass" && email != ""){
      // var email = $('#email').val();
      alert(email);
      check_email_last = "plass";
      formDataWithImages.append('email', $('#email').val());

    }else{
      // alert("กรุณาใส่ที่อยู่อีเมลในรูปแบบที่ถูกต้อง");
      check_email_last = "";
    }

  }

     // แสดงค่าที่ถูกติ๊ก
    // alert("Selected Radio Value: " + selectedRadioValue);


  var company_name = $('#company_name').val();
  var title_name = $('#title_name').val();
  var firstname = $('#firstname').val();
  var lastname = $('#lastname').val();
  // var ID_card = $('#ID_card').val();
  var phone_user = $('#phone_user').val();
  // var land_title_number = $('#land_title_number').val();
  // var land_number = $('#land_number').val();
  // var survey_page_number = $('#survey_page_number').val();
  var amphure = $('#amphure').val();
  var tambonsid = $('#tambonsid').val();
  var utilization = $('#utilization').val();

  var ID_card_Copy = $('#ID_card_Copy').val();
  var house_regis_Copy = $('#house_regis_Copy').val();
  var company_certificate = $('#company_certificate').val();
  // var aas = CompanyChecked;

  // alert(aas); 





  if(CompanyChecked == 1){
    
    var files_img_sum = "";
    formDataWithImages.getAll('files[]').forEach(function(file) {
      files_img_sum += file.name + ", ";
      // console.log('Name of the file:', files_img_sum);
    });

    // console.log('files_img_sum:', files_img_sum);

    if(company_name != "" && title_name != "" && firstname != "" && lastname != "" && ID_card_if != 0 && phone_user.length === 10 && amphure != "" && tambonsid != "" && utilization != ""){
      // alert("1");
      if(ID_card_Copy != "" && house_regis_Copy != "" && company_certificate != "" && files_img_sum != ""){
        // alert("2");
          if(check_emailRadio != "no_check"){
            // alert("3");
            if(check_email_last == "plass" || check_emailRadio == "check_receiveRadio"){
              // alert("4");
              if(check_Consent == "Consent"){
                // alert("5");

                Swal.fire({
                    title: "คุณแน่ใจหรือไม่?",
                    text: "คุณต้องการยืนยันหรือไม่ ไม่สามารถย้อนกลับได้!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "ตกลง!",
                    cancelButtonText: "ยกเลิก!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        let timerInterval;

                         // ปิดการใช้งานปุ่ม
                         document.getElementById("btn_submit").disabled = true;
                        
                        Swal.fire({
                            title: "ระบบกำลังดำเนินการ กรุณารอสักครู่...",
                            html: "<b></b> มิลลิวินาที.",
                            timer: 5000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading();
                                const timer = Swal.getPopup().querySelector("b");
                                timerInterval = setInterval(() => {
                                    timer.textContent = `${Swal.getTimerLeft()}`;
                                }, 100);

                                // ส่งข้อมูลด้วย AJAX
                                $.ajax({
                                    url: '<?php echo base_url('admin/form_enter_information/'); ?>',
                                    type: 'POST',
                                    data: formDataWithImages,
                                    contentType: false,
                                    processData: false,
                                    success: function (data) {
                                        console.log("--------t--------");
                                        console.log(data);
                                        //clearInterval(timerInterval);
                                       // Swal.close();  // ปิด Swal หลังจากที่ได้รับการตอบสนองจากเซิร์ฟเวอร์
                                       // location.reload(); // หรือทำงานอื่น ๆ ตามต้องการ
                                    },
                                    // error: function (error) {
                                    //     console.error(error);
                                    // }
                                });
                            },
                            willClose: () => {
                                clearInterval(timerInterval);
                            }
                        });
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        console.log("ยกเลิก");
                    }
                });

              }else{
                alert("กรุณายอมรับเงื่อนไขเพื่อดำเนินการต่อ");
              }

            }else{
              alert("กรุณาใส่ที่อยู่อีเมลในรูปแบบที่ถูกต้อง");
            }

          }else{
            alert("กรุณาระบุว่าท่านต้องการรับเอกสารผ่านช่องทางใด");
          }

      }else{
        Swal.fire({
          position: "center",
          icon: "warning",
          title: "กรุณาอัปโหลดรูปภาพ",
          showConfirmButton: false,
          timer: 1500,
        });
      }

    }else{
      // alert("กรุณากรอกข้อมูลให้ครบถ้วน");
      Swal.fire({
        position: "center",
        icon: "warning",
        title: "กรุณากรอกข้อมูลให้ครบถ้วน",
        showConfirmButton: false,
        timer: 1500,
      });
    }

  } else{

      // var files_img_sum = "";
      // formDataWithImages.getAll('files[]').forEach(function(file) {
      //   files_img_sum += file.name + ", ";
      //   // console.log('Name of the file:', files_img_sum);
      // });

      // console.log('files_img_sum:', files_img_sum);
      
      if(title_name != "" && firstname != "" && lastname != "" && ID_card_if != 0 && phone_user.length === 10 && amphure != "" && tambonsid != "" && utilization != ""){
        // alert("6");
        if(ID_card_Copy != "" && house_regis_Copy != ""){
          // alert("7");
          if(check_emailRadio != "no_check"){
            // alert("8");
            if(check_email_last == "plass" || check_emailRadio == "check_receiveRadio"){
              // alert("9");
              if(check_Consent == "Consent"){
                // alert("10");

                Swal.fire({
                    title: "คุณแน่ใจหรือไม่?",
                    text: "ไม่สามารถย้อนกลับได้ คุณยังต้องการยืนยันหรือไม่!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "ตกลง!",
                    cancelButtonText: "ยกเลิก!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        let timerInterval;

                        
                          // ปิดการใช้งานปุ่ม
                          document.getElementById("btn_submit").disabled = true;
              
                        Swal.fire({
                          title: "ระบบกำลังดำเนินการ กรุณารอสักครู่...",
                          html: "<b></b> มิลลิวินาที.",
                          timer: 5000,
                          timerProgressBar: true,
                          didOpen: () => {

                              // ส่งข้อมูลด้วย AJAX
                              $.ajax({
                                  url: '<?php echo base_url('admin/form_enter_information/'); ?>',
                                  type: 'POST',
                                  data: formDataWithImages,
                                  contentType: false,
                                  processData: false,
                                  success: function (data) {
                                      console.log(data);
                                      // clearInterval(timerInterval);
                                      // Swal.close();  // ปิด Swal หลังจากที่ได้รับการตอบสนองจากเซิร์ฟเวอร์
                                      // location.reload(); // หรือทำงานอื่น ๆ ตามต้องการ
                                  },
                                  // error: function (error) {
                                  //     console.error(error);
                                  // }
                              });
                              
                              Swal.showLoading();
                              const timer = Swal.getPopup().querySelector("b");
                              timerInterval = setInterval(() => {
                                  timer.textContent = `${Swal.getTimerLeft()}`;
                              }, 100);
                              
                          },
                          willClose: () => {
                              clearInterval(timerInterval);
                          }
                        });
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        console.log("ยกเลิก");
                    }
                });


                
              }else{
                alert("ท่านยังไม่ได้ยอมรับเงื่อนไข");
              }

            }else{
              alert("กรุณาใส่ที่อยู่อีเมลในรูปแบบที่ถูกต้อง");
            }

          }else{
            alert("กรุณาระบุว่าท่านต้องการรับเอกสารผ่านช่องทางใด");
          }
        
        }else{
          Swal.fire({
            position: "center",
            icon: "warning",
            title: "กรุณาอัปโหลดรูปภาพ",
            showConfirmButton: false,
            timer: 1500,
          });
        }

      }else{
        // alert("กรุณากรอกข้อมูลให้ครบถ้วน");
        Swal.fire({
          position: "center",
          icon: "warning",
          title: "กรุณากรอกข้อมูลให้ครบถ้วน",
          showConfirmButton: false,
          timer: 1500,
        });
      }

  }

      
 



        // showUploadStatus.innerHTML = 'อัปโหลดรูปสำเร็จ';


  // var gender = $('input[name="sex"]:checked').val();

  // var day_birthday = $('#day_birthday').val();
  // var month_birthday = $('#month_birthday').val();
  // var Year18 = $('#Year18').val();
  // var birthday = "";

  // if(day_birthday != "" && month_birthday != "" && Year18 != ""){

  //   birthday = (Year18-543)+"-"+month_birthday+"-"+day_birthday;
  //   // alert(birthday);
  // }

  
  // alert((Year18-543)+"-"+month_birthday+"-"+day_birthday);


  // alert(gender);

  // var title_name = $('#title_name').val();
//   Swal.fire({
//   title: "คุณแน่ใจไหม?",
//   text: "คุณจะไม่สามารถเปลี่ยนกลับสิ่งนี้ได้!",
//   icon: "warning",
//   showCancelButton: true,
//   confirmButtonColor: "#3085d6",
//   cancelButtonColor: "#d33",
//   confirmButtonText: "ตกลง!",
//   cancelButtonText: "ยกเลิก!"
//   }).then((result) => {
//   if (result.isConfirmed) {

//     var title_name = $('#title_name').val();
//     var firstname = $('#firstname').val();
//     var lastname = $('#lastname').val();
//     // var ID_card = $('#ID_card').val();
//     var phone_user = $('#phone_user').val();
//     // var birthday = $('#birthday').val();
    
//     if(title_name != "" && firstname != "" && lastname != "" && phone_user.length === 10 && birthday != "" && ID_card_db != "" && confirmPassword_db != ""){

//       // alert ("คบ");

//       $.ajax({
//         url: "<?php echo base_url('admin/insert_data/'); ?>",
//         method: "POST",
//         data: {
//           title_name_user : $('#title_name').val(),
//           // sex_user : $('input[name="sex"]:checked').val(),
//           firstname_user : $('#firstname').val(),
//           lastname_user : $('#lastname').val(),
//           ID_card : ID_card_db,
//           // ID_card : $('#ID_card').val(),
//           phone_user : $('#phone_user').val(),
//           birthday_user : birthday,
//           // password : $('#password').val(),
//           password : confirmPassword_db,
//         },
        
//         success: function(data){
//           re = data.trim();
//           // alert(re);

//           if(re == "ID_card-exists"){
//             Swal.fire({
//             position: "center",
//             icon: "error",
//             title: "หมายเลขบัตรประชาชนมีอยู่แล้ว",
//             showConfirmButton: false,
//             timer: 1500
//           });
//             // window.location.reload();
//           }else {
//             // alert("ลงเรียบร้อย");
//             location.href="<?php echo site_url('admin/login')?>";
//           }


//         }
//       });

//     }
//     else{
//       Swal.fire({
//       position: "center",
//       icon: "error",
//       title: "ข้อมูลไม่ครบถ้วน",
//       showConfirmButton: false,
//       timer: 1500
//     });
//     }
   
//   }
// });



  // var day_birthday = $('#day_birthday').val();
  // var new_Month = $('#new_Month').val();
  // var Year18 = $('#Year18').val();
  
  // alert((Year18-543)+"-"+new_Month+"-"+day_birthday);




  // alert(gender);
  
  //   $.ajax({
  //   url: "<?php //echo base_url('admin/btn_wait_status/'); ?>",
  //   method: "POST",
  //   data: {
  //     erlm_id : <?php //echo $rp_s->erlm_id; ?>
  //   },


  //   success: function(data){
  //     // alert(data);
  //     if(data = "approve_status_ok"){
  //       // alert ("sdsds");
  //       // console.log(re);
  //       window.location.reload();
  //     }
  //   }
  // });
  
});//click function

</script>